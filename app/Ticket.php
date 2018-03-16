<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Ticket extends Model
{
    use Sortable;

    public $sortable = [
        'id',
        'name',
        'title',
        'status',
        'category_id',
        'email',
        'created_at',
        'updated_at'
    ];
	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var  array
	 */
    protected $fillable = [
    	'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'
    ];

    /**
     * A ticket belongs to a user
     */
	public function user()
    {
    	return $this->belongsTo(User::class);
   }

    /**
     * A ticket can have many comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * A ticket belongs to a category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
