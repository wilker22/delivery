<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => '5',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'varchar',
                'constraint' => '100',

            ],
            'email' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'cpf' => [
                'type'=> 'varchar',
                'constraint' => '20',
                'null' => true,
                'unique' => true
            ],

            'telefone' => [
                'type' => 'varchar',
                'constraint' => '20'
            ],
            'is_admin' => [
                'type'=> 'boolean',
                'null' => false,
                'default' => false
            ],
            'ativo' => [
                'type'=> 'boolean',
                'null' => false,
                'default' => false
            ],
            'password_hash' => [
                'type'=> 'varchar',
                'constraint' => '255',
                
            ],
            'ativacao_hash' => [
                'type'=> 'varchar',
                'constraint' => '64',
                'null' => true,
                'unique' => true
            ],
            'reset_hash' => [
                'type'=> 'varchar',
                'constraint' => '64',
                'null' => true,
                'unique' => true
                
            ],
            'reset_expira_em' => [
                'type'=> 'datetime',
                'null' => true,
                'default' => null
                
            ],
            'criado_em' => [
                'type'=> 'datetime',
                'null' => true,
                'default' => null
                
            ],
            'atualizado_em' => [
                'type'=> 'datetime',
                'null' => true,
                'default' => null
                
            ],
            'deletado_em' => [
                'type'=> 'datetime',
                'null' => true,
                'default' => null
                
            ],

            
        ]);

        $this->forge->addPrimaryKey('id', true)->addUniqueKey('email');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
