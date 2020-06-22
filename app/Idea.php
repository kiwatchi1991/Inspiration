<?php

namespace inspiration;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Idea extends Model
{
    /**
     * 削除済みユーザー以外を表示する
     */
    use SoftDeletes;

    protected $table = 'ideas';
    protected $dates = ['deleted_at'];

    public function user(): BelongsTo //user()はリレーションメソッド
    {
        //記事と記事を書いたユーザ＝は多対1の関係なのでその場合は「belongsTo」メソッドを使用する。
        return $this->belongsTo('inspiration\User');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('inspiration\User', 'likes')->withTimestamps();
    }

    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool) $this->likes->where('id', $user->id)->count()
            : false;
    }
}
