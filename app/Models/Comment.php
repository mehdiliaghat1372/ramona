<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Comment
 *
 * @property int $id
 * @property int $video_id
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string $content
 * @property string|null $meta
 * @property int $is_accepted
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read User $user
 * @property-read Video $video
 * @method static bool|null forceDelete()
 * @method static Builder|Comment newModelQuery()
 * @method static Builder|Comment newQuery()
 * @method static \Illuminate\Database\Query\Builder|Comment onlyTrashed()
 * @method static Builder|Comment query()
 * @method static bool|null restore()
 * @method static Builder|Comment whereContent($value)
 * @method static Builder|Comment whereCreatedAt($value)
 * @method static Builder|Comment whereDeletedAt($value)
 * @method static Builder|Comment whereEmail($value)
 * @method static Builder|Comment whereId($value)
 * @method static Builder|Comment whereIsAccepted($value)
 * @method static Builder|Comment whereMeta($value)
 * @method static Builder|Comment whereName($value)
 * @method static Builder|Comment whereUpdatedAt($value)
 * @method static Builder|Comment whereUserId($value)
 * @method static Builder|Comment whereVideoId($value)
 * @method static \Illuminate\Database\Query\Builder|Comment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Comment withoutTrashed()
 * @mixin Eloquent
 */
class Comment extends Model
{
    use SoftDeletes;

    /**
     * @return BelongsTo
     */
    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
