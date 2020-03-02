<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Contatos extends Model
{
    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var string
     */
    public $primaryKey = 'id';

    protected $casts = [
        'id' => 'string',
    ];

    protected $fillable = [
        'id',
        'nome',
        'sobrenome',
        'telefone',
        'email'
    ];

    protected $table =  'contatos';

    public function mensagem()
    {
        return $this->hasMany(Mensagens::class, 'contato_id', 'id');
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
