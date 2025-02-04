<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Panel\Http\Controllers;

use App\Helpers\DateHelper;
use App\Helpers\StrHelper;
use App\Models\App;
use App\Models\Config;
use App\Models\Role;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    public function postShow()
    {
        // config keys
        $configKeys = [
            'image_service',
            'video_service',
            'audio_service',
            'document_service',
            'post_required_email',
            'post_required_phone',
            'post_required_kyc',
            'post_limit_status',
            'post_limit_type',
            'post_limit_period_start',
            'post_limit_period_end',
            'post_limit_cycle_start',
            'post_limit_cycle_end',
            'post_limit_rule',
            'post_limit_tip',
            'post_limit_whitelist',
            'post_editor_service',
            'post_editor_group',
            'post_editor_title',
            'post_editor_sticker',
            'post_editor_image',
            'post_editor_video',
            'post_editor_audio',
            'post_editor_document',
            'post_editor_mention',
            'post_editor_hashtag',
            'post_editor_extend',
            'post_editor_location',
            'post_editor_anonymous',
            'post_editor_image_upload_type',
            'post_editor_video_upload_type',
            'post_editor_audio_upload_type',
            'post_editor_document_upload_type',
            'post_editor_image_max_upload_number',
            'post_editor_video_max_upload_number',
            'post_editor_audio_max_upload_number',
            'post_editor_document_max_upload_number',
            'post_editor_group_required',
            'post_editor_title_show',
            'post_editor_title_required',
            'post_editor_title_length',
            'post_editor_content_length',
        ];
        $configs = Config::whereIn('item_key', $configKeys)->get();

        foreach ($configs as $config) {
            $params[$config->item_key] = $config->item_value;
        }

        // language keys
        $langKeys = [
            'post_limit_tip',
        ];

        $defaultLangParams = [];
        foreach ($langKeys as $langKey) {
            $defaultLangParams[$langKey] = StrHelper::languageContent($params[$langKey]);
        }

        $ruleTimezone = 'UTC'.DateHelper::fresnsDatabaseTimezone();

        $plugins = App::all();

        $imageService = $plugins->where('fskey', $params['image_service'])->first();
        $videoService = $plugins->where('fskey', $params['video_service'])->first();
        $audioService = $plugins->where('fskey', $params['audio_service'])->first();
        $documentService = $plugins->where('fskey', $params['document_service'])->first();
        $pluginPageUpload = [
            'image' => $imageService?->access_path ? true : false,
            'video' => $videoService?->access_path ? true : false,
            'audio' => $audioService?->access_path ? true : false,
            'document' => $documentService?->access_path ? true : false,
        ];

        $plugins = $plugins->filter(function ($plugin) {
            return in_array('editor', $plugin->panel_usages);
        });

        $roles = Role::all();

        return view('FsView::operations.publish-post', compact('params', 'defaultLangParams', 'ruleTimezone', 'plugins', 'pluginPageUpload', 'roles'));
    }

    public function postUpdate(Request $request)
    {
        $configKeys = [
            'post_required_email',
            'post_required_phone',
            'post_required_kyc',
            'post_limit_status',
            'post_limit_type',
            'post_limit_period_start',
            'post_limit_period_end',
            'post_limit_cycle_start',
            'post_limit_cycle_end',
            'post_limit_rule',
            'post_limit_tip',
            'post_limit_whitelist',
            'post_editor_service',
            'post_editor_group',
            'post_editor_title',
            'post_editor_sticker',
            'post_editor_image',
            'post_editor_video',
            'post_editor_audio',
            'post_editor_document',
            'post_editor_mention',
            'post_editor_hashtag',
            'post_editor_extend',
            'post_editor_location',
            'post_editor_anonymous',
            'post_editor_image_upload_type',
            'post_editor_video_upload_type',
            'post_editor_audio_upload_type',
            'post_editor_document_upload_type',
            'post_editor_image_max_upload_number',
            'post_editor_video_max_upload_number',
            'post_editor_audio_max_upload_number',
            'post_editor_document_max_upload_number',
            'post_editor_group_required',
            'post_editor_title_show',
            'post_editor_title_required',
            'post_editor_title_length',
            'post_editor_content_length',
        ];

        $configs = Config::whereIn('item_key', $configKeys)->get();
        foreach ($configKeys as $configKey) {
            $config = $configs->where('item_key', $configKey)->first();
            if (! $config) {
                continue;
            }

            if (! $request->has($configKey)) {
                $config->setDefaultValue();
                $config->save();
                continue;
            }

            $config->item_value = $request->$configKey;
            $config->save();
        }

        return $this->updateSuccess();
    }

    public function commentShow()
    {
        // config keys
        $configKeys = [
            'image_service',
            'video_service',
            'audio_service',
            'document_service',
            'comment_required_email',
            'comment_required_phone',
            'comment_required_kyc',
            'comment_limit_status',
            'comment_limit_type',
            'comment_limit_period_start',
            'comment_limit_period_end',
            'comment_limit_cycle_start',
            'comment_limit_cycle_end',
            'comment_limit_rule',
            'comment_limit_tip',
            'comment_limit_whitelist',
            'comment_editor_service',
            'comment_editor_sticker',
            'comment_editor_image',
            'comment_editor_video',
            'comment_editor_audio',
            'comment_editor_document',
            'comment_editor_mention',
            'comment_editor_hashtag',
            'comment_editor_extend',
            'comment_editor_location',
            'comment_editor_anonymous',
            'comment_editor_image_upload_type',
            'comment_editor_video_upload_type',
            'comment_editor_audio_upload_type',
            'comment_editor_document_upload_type',
            'comment_editor_image_max_upload_number',
            'comment_editor_video_max_upload_number',
            'comment_editor_audio_max_upload_number',
            'comment_editor_document_max_upload_number',
            'comment_editor_content_length',
        ];

        $configs = Config::whereIn('item_key', $configKeys)->get();

        foreach ($configs as $config) {
            $params[$config->item_key] = $config->item_value;
        }

        // language keys
        $langKeys = [
            'comment_limit_tip',
        ];

        $defaultLangParams = [];
        foreach ($langKeys as $langKey) {
            $defaultLangParams[$langKey] = StrHelper::languageContent($params[$langKey]);
        }

        $ruleTimezone = 'UTC'.DateHelper::fresnsDatabaseTimezone();

        $plugins = App::all();

        $imageService = $plugins->where('fskey', $params['image_service'])->first();
        $videoService = $plugins->where('fskey', $params['video_service'])->first();
        $audioService = $plugins->where('fskey', $params['audio_service'])->first();
        $documentService = $plugins->where('fskey', $params['document_service'])->first();
        $pluginPageUpload = [
            'image' => $imageService?->access_path ? true : false,
            'video' => $videoService?->access_path ? true : false,
            'audio' => $audioService?->access_path ? true : false,
            'document' => $documentService?->access_path ? true : false,
        ];

        $plugins = $plugins->filter(function ($plugin) {
            return in_array('editor', $plugin->panel_usages);
        });

        $roles = Role::all();

        return view('FsView::operations.publish-comment', compact('params', 'defaultLangParams', 'ruleTimezone', 'plugins', 'pluginPageUpload', 'roles'));
    }

    public function commentUpdate(Request $request)
    {
        $configKeys = [
            'comment_required_email',
            'comment_required_phone',
            'comment_required_kyc',
            'comment_limit_status',
            'comment_limit_type',
            'comment_limit_period_start',
            'comment_limit_period_end',
            'comment_limit_cycle_start',
            'comment_limit_cycle_end',
            'comment_limit_rule',
            'comment_limit_tip',
            'comment_limit_whitelist',
            'comment_editor_service',
            'comment_editor_sticker',
            'comment_editor_image',
            'comment_editor_video',
            'comment_editor_audio',
            'comment_editor_document',
            'comment_editor_mention',
            'comment_editor_hashtag',
            'comment_editor_extend',
            'comment_editor_location',
            'comment_editor_anonymous',
            'comment_editor_image_upload_type',
            'comment_editor_video_upload_type',
            'comment_editor_audio_upload_type',
            'comment_editor_document_upload_type',
            'comment_editor_image_max_upload_number',
            'comment_editor_video_max_upload_number',
            'comment_editor_audio_max_upload_number',
            'comment_editor_document_max_upload_number',
            'comment_editor_content_length',
        ];

        $configs = Config::whereIn('item_key', $configKeys)->get();

        foreach ($configKeys as $configKey) {
            $config = $configs->where('item_key', $configKey)->first();
            if (! $config) {
                continue;
            }

            if (! $request->has($configKey)) {
                $config->setDefaultValue();
                $config->save();
                continue;
            }

            $config->item_value = $request->$configKey;
            $config->save();
        }

        return $this->updateSuccess();
    }
}
