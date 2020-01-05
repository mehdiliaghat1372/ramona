<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Slide
 *
 * @property int $id
 * @property string $image
 * @property string $link
 * @property string $title
 * @property string $description
 * @property string $button
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Slide newModelQuery()
 * @method static Builder|Slide newQuery()
 * @method static Builder|Slide query()
 * @method static Builder|Slide whereButton($value)
 * @method static Builder|Slide whereCreatedAt($value)
 * @method static Builder|Slide whereDeletedAt($value)
 * @method static Builder|Slide whereDescription($value)
 * @method static Builder|Slide whereId($value)
 * @method static Builder|Slide whereImage($value)
 * @method static Builder|Slide whereLink($value)
 * @method static Builder|Slide whereTitle($value)
 * @method static Builder|Slide whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Slide extends Model
{
    protected $fillable = [
        'image',
        'link',
        'title',
        'description',
        'button',
    ];
}
