<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;
    protected $guarded = [];


    /* ############### Relationships ################ */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /* ############### Queries ################ */



    public static function getNLatest($n = 10)
    {
        return self::where('is_published', 1)
            ->latest('published_at')
            ->take($n)
            ->get(['id', 'judul', 'published_at', 'category_id', 'user_id', 'gambar']);
    }


    public static function getAllByLatest(int $limit = 6): \Illuminate\Pagination\LengthAwarePaginator
    {
        return self::where('is_published', 1)
            ->whereNotIn('id', function ($query) {
                return $query->select('id')
                    ->from('artikels')
                    ->orderByDesc('published_at')
                    ->take(3);
            })
            ->with(['category', 'user'])
            ->latest()
            ->paginate($limit);
    }

    public static function getAllByCategory(int $categoryId, int $limit = 10): \Illuminate\Pagination\LengthAwarePaginator
    {
        return self::where('category_id', $categoryId)
            ->with(['category', 'user'])
            ->latest()
            ->paginate($limit);
    }

    public static function getAllByUser(int $userId, int $limit = 10): \Illuminate\Pagination\LengthAwarePaginator
    {
        return self::with(['category', 'user'])
            ->latest()
            ->whereUserId($userId)
            ->paginate($limit);
    }

    public function scopeWhereUserId($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public static function getOtherArticles(String|int $id, int $limit = 5, $latest = false)
    {
        return self::select('id', 'judul', 'published_at', 'category_id', 'user_id')
            ->with(['category:id,category', 'user:id,name'])
            ->where('id', '!=', $id)
            ->when($latest, function ($query) {
                return $query->latest();
            })
            ->limit($limit)
            ->get([
                'articles.id', 'articles.judul', 'articles.published_at',
                'articles.category_id', 'articles.user_id',
                'categories.category', 'users.name'
            ]);
    }

    public static function findWithRelationById(String|int $id): self
    {
        return self::where('is_published', 1)->with(['category:id,category', 'user:id,name'])
            ->findOrFail($id);
    }
}
