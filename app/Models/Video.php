<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Video
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $content
 * @property string $url
 * @property string $thumbnail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read Collection|VideoAttribute[] $attributes
 * @property-read int|null $attributes_count
 * @property-read User $author
 * @property-read Collection|Category[] $categories
 * @property-read int|null $categories_count
 * @method static Builder|Video newModelQuery()
 * @method static Builder|Video newQuery()
 * @method static Builder|Video query()
 * @method static Builder|Video whereAuthorId($value)
 * @method static Builder|Video whereContent($value)
 * @method static Builder|Video whereCreatedAt($value)
 * @method static Builder|Video whereDeletedAt($value)
 * @method static Builder|Video whereId($value)
 * @method static Builder|Video whereThumbnail($value)
 * @method static Builder|Video whereTitle($value)
 * @method static Builder|Video whereUpdatedAt($value)
 * @method static Builder|Video whereUrl($value)
 * @mixin Eloquent
 */
class Video extends Model
{
    /**
     * @return BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * @return HasMany
     */
    public function attributes()
    {
        return $this->hasMany(VideoAttribute::class);
    }

    /**
     * @return BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
