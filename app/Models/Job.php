<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = ['title', 'description','file'];

    public function jobstore($req)
    {
        Job::Create([
            "title"=> $req->title,
            "description" => $req->description
			//"file" => $req->file
        ]);
    }
	
	protected $primaryKey="id";
}
