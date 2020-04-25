<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataScrape extends Model
{
 protected $table = "datascrape";
 protected $fillable = ['data_scrape', 'link'];
 protected $primaryKey = "id_data_scrape";   //
}
