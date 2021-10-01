<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Http\FresnsApi\Info;

use App\Base\Resources\BaseAdminResource;
use App\Http\FresnsApi\Helpers\ApiCommonHelper;
use App\Http\FresnsApi\Helpers\ApiFileHelper;
use App\Http\FresnsApi\Helpers\ApiLanguageHelper;
use App\Http\FresnsDb\FresnsPluginBadges\FresnsPluginBadges;
use App\Http\FresnsDb\FresnsPlugins\FresnsPlugins;
use App\Http\FresnsDb\FresnsPluginUsages\FresnsPluginUsagesConfig;

/**
 * List resource config handle.
 */
class FresnsPluginUsagesResource extends BaseAdminResource
{
    public function toArray($request)
    {
        // Form Field
        $formMap = FresnsPluginUsagesConfig::FORM_FIELDS_MAP;
        $formMapFieldsArr = [];
        foreach ($formMap as $k => $dbField) {
            $formMapFieldsArr[$dbField] = $this->$dbField;
        }

        // Extensions List Info
        $langTag = request()->header('langTag', '');
        $name = ApiLanguageHelper::getLanguages(FresnsPluginUsagesConfig::CFG_TABLE, 'name', $this->id);
        $type = $this->type;
        $plugin = $this->plugin_unikey;
        $pluginInfo = FresnsPlugins::where('unikey', $plugin)->first();
        $icon = ApiFileHelper::getImageSignUrlByFileIdUrl($this->icon_file_id, $this->icon_file_url);
        $url = '';
        if ($pluginInfo) {
            $url = ApiCommonHelper::getPluginUsagesUrl($plugin, $this->id);
        }
        $number = $this->editor_number;
        $badgesType = '';
        $badgesValue = '';
        $pluginbades = FresnsPluginBadges::where('plugin_unikey', $this->plugin_unikey)->first();
        if ($pluginbades) {
            $badgesType = $pluginbades['display_type'];
            $badgesValue = $pluginbades['value_text'] ?? $pluginbades['value_number'];
        }
        $sortNumber = [];
        if ($this->type == 4) {
            $postLists = self::getTypePluginUsages('postLists', $this->data_sources);
            $postFollows = self::getTypePluginUsages('postLists', $this->data_sources);
            $postNearbys = self::getTypePluginUsages('postLists', $this->data_sources);
            $sortNumber['postLists'] = $postLists;
            $sortNumber['postFollows'] = $postFollows;
            $sortNumber['postNearbys'] = $postNearbys;
        }

        // Default Field
        $default = [
            'type' => $type,
            'plugin' => $plugin,
            'name' => $name == null ? '' : $name['lang_content'],
            'icon' => $icon == null ? '' : $icon,
            'url' => $url,
            'number' => $number,
            'badgesType' => $badgesType,
            'badgesValue' => $badgesValue,
            'sortNumber' => $sortNumber,
        ];

        // Merger
        $arr = $default;

        return $arr;
    }

    // Get Type Plugin Usages
    public static function getTypePluginUsages($key, $data)
    {
        $sort_number = json_decode($data, true);
        $sortNumber = [];
        $introArr = [];
        if ($sort_number) {
            if ($sort_number[$key]) {
                foreach ($sort_number[$key]['sortNumber'] as $k => &$s) {
                    foreach ($s as &$v) {
                        if (! is_array($v)) {
                            $id = $v;
                        }
                        if (is_array($v)) {
                            $intro = [];
                            foreach ($v as $i) {
                                $intro['id'] = $id;
                                $intro['title'] = $i['title'];
                                $intro['description'] = $i['description'];
                                $introArr[] = $intro;
                            }
                        }
                    }
                }
            }
        }

        return $introArr;
    }
}
