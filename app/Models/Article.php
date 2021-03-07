<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_name', 'article_type', 'num_outputs_of_article', 'num_entries_of_article',
        'description', 'item_arrival_date', 'item_departure_date', 'item_withdrawal_order_number',
        'who_removes', 'amount_of_withdrawal', 'quantity_in_existence'
    ];

}
