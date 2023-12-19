<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Panel\Http\Controllers;

use App\Models\Config;
use App\Models\User;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    // search users
    public function searchUsers(Request $request)
    {
        $keyword = $request->keyword;

        $users = [];
        if ($keyword) {
            $users = User::where('username', 'like', "%$keyword%")->orWhere('nickname', 'like', "%$keyword%")->paginate();
        }

        return response()->json($users);
    }

    // update batch languages
    public function updateLanguages(string $itemKey, Request $request)
    {
        $config = Config::where('item_key', $itemKey)->first();

        if (! $config) {
            $config = new Config();

            $config->fill([
                'item_key' => $itemKey,
                'item_type' => 'object',
            ]);
        }

        $itemValue = $config->item_value;

        foreach ($request->languages as $langTag => $langContent) {
            $itemValue[$langTag] = $langContent;
        }

        $config->item_value = $itemValue;
        $config->save();

        return $this->updateSuccess();
    }

    // update language
    public function updateLanguage(string $itemKey, string $langTag, Request $request)
    {
        $config = Config::where('item_key', $itemKey)->first();

        if (! $config) {
            $config = new Config();

            $config->fill([
                'item_key' => $itemKey,
                'item_type' => 'object',
            ]);
        }

        $itemValue = $config->item_value;
        $itemValue[$langTag] = $request->langContent;

        $config->item_value = $itemValue;
        $config->save();

        return $this->updateSuccess();
    }

    // update status
    public function updateStatus(string $itemKey, Request $request)
    {
        $config = Config::where('item_key', $itemKey)->first();

        if (! $config) {
            $config = new Config();

            $config->fill([
                'item_key' => $itemKey,
                'item_type' => $request->itemType,
            ]);
        }

        $config->item_value = $request->itemValue;
        $config->item_type = $request->itemType;
        $config->save();

        return $this->updateSuccess();
    }
}