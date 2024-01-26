<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

return [
    /*
    |-------------------------------------
    | Login required to use
    |-------------------------------------
    */

    // Public mode account
    'publicAccount' => [
        'api.global.archives',
        'api.file.storage.token',
        'api.file.uploads',
        'api.file.warning',
        'api.file.link',
        'api.account.logout',
        'api.account.detail',
        'api.account.wallet.records',
        'api.user.login',
        'api.user.overview',
        'api.user.extcredits.records',
        'api.user.edit',
        'api.user.device.token',
        'api.user.mark',
        'api.user.mark.note',
        'api.user.extend.action',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.pin',
        'api.conversation.read',
        'api.conversation.delete',
        'api.conversation.send.message',
        'api.post.timelines',
        'api.post.delete',
        'api.comment.timelines',
        'api.comment.delete',
        'api.editor.quick.publish',
        'api.editor.configs',
        'api.editor.publish',
        'api.editor.edit',
        'api.editor.draft.create',
        'api.editor.draft.list',
        'api.editor.draft.detail',
        'api.editor.draft.update',
        'api.editor.draft.publish',
        'api.editor.draft.recall',
        'api.editor.draft.delete',
    ],

    // Public mode user
    'publicUser' => [
        'api.global.archives',
        'api.file.storage.token',
        'api.file.uploads',
        'api.file.warning',
        'api.file.link',
        'api.user.extcredits.records',
        'api.user.edit',
        'api.user.device.token',
        'api.user.mark',
        'api.user.mark.note',
        'api.user.extend.action',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.pin',
        'api.conversation.read',
        'api.conversation.delete',
        'api.conversation.send.message',
        'api.post.timelines',
        'api.post.delete',
        'api.comment.timelines',
        'api.comment.delete',
        'api.editor.configs',
        'api.editor.publish',
        'api.editor.edit',
        'api.editor.draft.create',
        'api.editor.draft.list',
        'api.editor.draft.detail',
        'api.editor.draft.update',
        'api.editor.draft.publish',
        'api.editor.draft.recall',
        'api.editor.draft.delete',
    ],

    // Private mode account
    'privateAccount' => [
        'api.global.archives',
        'api.global.roles',
        'api.global.content.types',
        'api.global.stickers',
        'api.common.input.tips',
        'api.common.callback',
        'api.file.storage.token',
        'api.file.uploads',
        'api.file.warning',
        'api.file.link',
        'api.file.users',
        'api.account.logout',
        'api.account.detail',
        'api.account.wallet.records',
        'api.user.list',
        'api.user.detail',
        'api.user.followers.you.follow',
        'api.user.interaction',
        'api.user.mark.list',
        'api.user.login',
        'api.user.overview',
        'api.user.extcredits.records',
        'api.user.edit',
        'api.user.device.token',
        'api.user.mark',
        'api.user.mark.note',
        'api.user.extend.action',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.pin',
        'api.conversation.read',
        'api.conversation.delete',
        'api.conversation.send.message',
        'api.group.tree',
        'api.group.list',
        'api.group.detail',
        'api.group.creator',
        'api.group.admins',
        'api.group.interaction',
        'api.hashtag.list',
        'api.hashtag.detail',
        'api.hashtag.interaction',
        'api.post.list',
        'api.post.timelines',
        'api.post.nearby',
        'api.post.detail',
        'api.post.interaction',
        'api.post.users',
        'api.post.quotes',
        'api.post.histories',
        'api.post.history.detail',
        'api.post.delete',
        'api.comment.list',
        'api.comment.timelines',
        'api.comment.nearby',
        'api.comment.detail',
        'api.comment.interaction',
        'api.comment.histories',
        'api.comment.history.detail',
        'api.comment.delete',
        'api.editor.configs',
        'api.editor.publish',
        'api.editor.edit',
        'api.editor.draft.create',
        'api.editor.draft.list',
        'api.editor.draft.detail',
        'api.editor.draft.update',
        'api.editor.draft.publish',
        'api.editor.draft.recall',
        'api.editor.draft.delete',
        'api.search.users',
        'api.search.groups',
        'api.search.hashtags',
        'api.search.geotags',
        'api.search.posts',
        'api.search.comments',
    ],

    // Private mode user
    'privateUser' => [
        'api.global.archives',
        'api.global.roles',
        'api.global.content.types',
        'api.global.stickers',
        'api.common.input.tips',
        'api.common.callback',
        'api.file.storage.token',
        'api.file.uploads',
        'api.file.warning',
        'api.file.link',
        'api.file.users',
        'api.user.list',
        'api.user.detail',
        'api.user.followers.you.follow',
        'api.user.interaction',
        'api.user.mark.list',
        'api.user.extcredits.records',
        'api.user.edit',
        'api.user.device.token',
        'api.user.mark',
        'api.user.mark.note',
        'api.user.extend.action',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.pin',
        'api.conversation.read',
        'api.conversation.delete',
        'api.conversation.send.message',
        'api.group.tree',
        'api.group.list',
        'api.group.detail',
        'api.group.creator',
        'api.group.admins',
        'api.group.interaction',
        'api.hashtag.list',
        'api.hashtag.detail',
        'api.hashtag.interaction',
        'api.post.list',
        'api.post.timelines',
        'api.post.nearby',
        'api.post.detail',
        'api.post.interaction',
        'api.post.users',
        'api.post.quotes',
        'api.post.histories',
        'api.post.history.detail',
        'api.post.delete',
        'api.comment.list',
        'api.comment.timelines',
        'api.comment.nearby',
        'api.comment.detail',
        'api.comment.interaction',
        'api.comment.histories',
        'api.comment.history.detail',
        'api.comment.delete',
        'api.editor.configs',
        'api.editor.publish',
        'api.editor.edit',
        'api.editor.draft.create',
        'api.editor.draft.list',
        'api.editor.draft.detail',
        'api.editor.draft.update',
        'api.editor.draft.publish',
        'api.editor.draft.recall',
        'api.editor.draft.delete',
        'api.search.users',
        'api.search.groups',
        'api.search.hashtags',
        'api.search.geotags',
        'api.search.posts',
        'api.search.comments',
    ],

    /*
    |-------------------------------------
    | Disable after user expiry
    |-------------------------------------
    */

    // Disable by content not visible
    'disableByContentNotVisible' => [
        'api.user.list',
        'api.user.extcredits.records',
        'api.user.followers.you.follow',
        'api.user.interaction',
        'api.user.mark.list',
        'api.group.interaction',
        'api.hashtag.list',
        'api.hashtag.interaction',
        'api.post.list',
        'api.post.interaction',
        'api.post.users',
        'api.post.quotes',
        'api.post.histories',
        'api.post.follow',
        'api.post.nearby',
        'api.comment.list',
        'api.comment.interaction',
        'api.comment.histories',
        'api.comment.timelines',
        'api.comment.nearby',
    ],

    // Disable for after expiry
    'disableForAfterExpiry' => [
        'api.file.storage.token',
        'api.file.warning',
        'api.file.link',
        'api.user.edit',
        'api.user.device.token',
        'api.user.mark',
        'api.user.mark.note',
        'api.user.extend.action',
        'api.notification.delete',
        'api.conversation.pin',
        'api.conversation.read',
        'api.conversation.delete',
        'api.post.delete',
        'api.comment.delete',
        'api.editor.publish',
        'api.editor.edit',
        'api.editor.draft.create',
        'api.editor.draft.update',
        'api.editor.draft.publish',
        'api.editor.draft.recall',
    ],

    /*
    |-------------------------------------
    | Read-only key disabled
    |-------------------------------------
    */

    // Disable for read only
    'disableForReadOnly' => [
        'api.file.storage.token',
        'api.file.uploads',
        'api.conversation.send.message',
        'api.editor.publish',
        'api.editor.edit',
        'api.editor.draft.create',
        'api.editor.draft.publish',
    ],
];
