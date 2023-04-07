<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

return [
    // Login to use for public mode account
    'publicAccount' => [
        'api.global.archives',
        'api.global.upload.token',
        'api.common.upload.file',
        'api.common.file.link',
        'api.common.file.users',
        'api.account.detail',
        'api.account.wallet.logs',
        'api.account.verify.identity',
        'api.account.edit',
        'api.account.logout',
        'api.account.apply.delete',
        'api.account.recall.delete',
        'api.user.auth',
        'api.user.panel',
        'api.user.edit',
        'api.user.mark',
        'api.user.mark.note',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.send.message',
        'api.conversation.read',
        'api.conversation.delete',
        'api.post.follow',
        'api.post.delete',
        'api.comment.follow',
        'api.comment.delete',
        'api.editor.quick.publish',
        'api.editor.config',
        'api.editor.drafts',
        'api.editor.create',
        'api.editor.generate',
        'api.editor.detail',
        'api.editor.update',
        'api.editor.publish',
        'api.editor.recall',
        'api.editor.delete',
    ],

    // Login to use for public mode user
    'publicUser' => [
        'api.global.archives',
        'api.global.upload.token',
        'api.common.upload.file',
        'api.common.file.link',
        'api.common.file.users',
        'api.user.panel',
        'api.user.edit',
        'api.user.mark',
        'api.user.mark.note',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.send.message',
        'api.conversation.read',
        'api.conversation.delete',
        'api.post.follow',
        'api.post.delete',
        'api.comment.follow',
        'api.comment.delete',
        'api.editor.quick.publish',
        'api.editor.config',
        'api.editor.drafts',
        'api.editor.create',
        'api.editor.generate',
        'api.editor.detail',
        'api.editor.update',
        'api.editor.publish',
        'api.editor.recall',
        'api.editor.delete',
    ],

    // Login to use for private mode account
    'privateAccount' => [
        'api.global.archives',
        'api.global.upload.token',
        'api.global.roles',
        'api.global.content.types',
        'api.global.stickers',
        'api.global.block.words',
        'api.common.input.tips',
        'api.common.callback',
        'api.common.upload.file',
        'api.common.file.link',
        'api.common.file.users',
        'api.account.detail',
        'api.account.wallet.logs',
        'api.account.verify.identity',
        'api.account.edit',
        'api.account.logout',
        'api.account.apply.delete',
        'api.account.recall.delete',
        'api.user.list',
        'api.user.detail',
        'api.user.followers.you.follow',
        'api.user.interaction',
        'api.user.mark.list',
        'api.user.auth',
        'api.user.panel',
        'api.user.edit',
        'api.user.mark',
        'api.user.mark.note',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.send.message',
        'api.conversation.read',
        'api.conversation.delete',
        'api.group.tree',
        'api.group.categories',
        'api.group.list',
        'api.group.detail',
        'api.group.interaction',
        'api.hashtag.list',
        'api.hashtag.detail',
        'api.hashtag.interaction',
        'api.post.list',
        'api.post.follow',
        'api.post.nearby',
        'api.post.detail',
        'api.post.interaction',
        'api.post.users',
        'api.post.quotes',
        'api.post.logs',
        'api.post.log.detail',
        'api.post.delete',
        'api.comment.list',
        'api.comment.follow',
        'api.comment.nearby',
        'api.comment.detail',
        'api.comment.interaction',
        'api.comment.logs',
        'api.comment.log.detail',
        'api.comment.delete',
        'api.editor.quick.publish',
        'api.editor.config',
        'api.editor.drafts',
        'api.editor.create',
        'api.editor.generate',
        'api.editor.detail',
        'api.editor.update',
        'api.editor.publish',
        'api.editor.recall',
        'api.editor.delete',
        'api.search.users',
        'api.search.groups',
        'api.search.hashtags',
        'api.search.posts',
        'api.search.comments',
    ],

    // Login to use for private mode user
    'privateUser' => [
        'api.global.archives',
        'api.global.upload.token',
        'api.global.roles',
        'api.global.content.types',
        'api.global.stickers',
        'api.global.block.words',
        'api.common.input.tips',
        'api.common.callback',
        'api.common.upload.file',
        'api.common.file.link',
        'api.common.file.users',
        'api.user.list',
        'api.user.detail',
        'api.user.followers.you.follow',
        'api.user.interaction',
        'api.user.mark.list',
        'api.user.panel',
        'api.user.edit',
        'api.user.mark',
        'api.user.mark.note',
        'api.notification.list',
        'api.notification.read',
        'api.notification.delete',
        'api.conversation.list',
        'api.conversation.detail',
        'api.conversation.messages',
        'api.conversation.send.message',
        'api.conversation.read',
        'api.conversation.delete',
        'api.group.tree',
        'api.group.categories',
        'api.group.list',
        'api.group.detail',
        'api.group.interaction',
        'api.hashtag.list',
        'api.hashtag.detail',
        'api.hashtag.interaction',
        'api.post.list',
        'api.post.follow',
        'api.post.nearby',
        'api.post.detail',
        'api.post.interaction',
        'api.post.users',
        'api.post.quotes',
        'api.post.logs',
        'api.post.log.detail',
        'api.post.delete',
        'api.comment.list',
        'api.comment.follow',
        'api.comment.nearby',
        'api.comment.detail',
        'api.comment.interaction',
        'api.comment.logs',
        'api.comment.log.detail',
        'api.comment.delete',
        'api.editor.quick.publish',
        'api.editor.config',
        'api.editor.drafts',
        'api.editor.create',
        'api.editor.generate',
        'api.editor.detail',
        'api.editor.update',
        'api.editor.publish',
        'api.editor.recall',
        'api.editor.delete',
        'api.search.users',
        'api.search.groups',
        'api.search.hashtags',
        'api.search.posts',
        'api.search.comments',
    ],

    // Disable after user expiry
    'disableRoutes' => [
        'api.common.upload.file',
        'api.common.file.link',
        'api.user.edit',
        'api.user.mark',
        'api.user.mark.note',
        'api.notification.delete',
        'api.conversation.send.message',
        'api.conversation.delete',
        'api.post.delete',
        'api.comment.delete',
        'api.editor.quick.publish',
        'api.editor.create',
        'api.editor.generate',
        'api.editor.detail',
        'api.editor.update',
        'api.editor.publish',
        'api.editor.recall',
        'api.editor.delete',
    ],
];
