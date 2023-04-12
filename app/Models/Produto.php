<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* Este Model, na verdade, representa a tabela
'produtos' do banco de dados */

class Produto extends Model {
    use HasFactory;

    /* Especificando manualmente o nome da tabela
    deste Model, no banco de dados */
    protected $table = 'produtos';

    /* Retorna o id do usuário ao qual este produto pertence */
    /* São usados: o "model" dos usuários e a "chave estrangeira" */
    public function ussser() {
        return $this->belongsTo( User::class, 'id_user' );
    }

    /* Retorna o id da categoria ao qual este produto pertence */
    /* São usados: o "model" das categorias e a "chave estrangeira" */
    public function cateeegoria() {
        return $this->belongsTo( Categoria::class, 'id_categoria' );
    }
}
