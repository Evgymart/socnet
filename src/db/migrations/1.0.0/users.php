<?php

use Phalcon\Db\Column;
use Phalcon\Db\Exception;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class UsersMigration_100
 */
class UsersMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     * @throws Exception
     */
    public function morph(): void
    {
        $this->morphTable('users', [
            'columns' => [
                new Column(
                    'id',
                    [
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 1,
                        'first' => true
                    ]
                ),
                new Column(
                    'first_name',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 45,
                        'after' => 'id'
                    ]
                ),
                new Column(
                    'last_name',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 45,
                        'after' => 'first_name'
                    ]
                ),
                new Column(
                    'birthdate',
                    [
                        'type' => Column::TYPE_DATE,
                        'notNull' => true,
                        'after' => 'last_name'
                    ]
                ),
                new Column(
                    'gender',
                    [
                        'type' => Column::TYPE_ENUM,
                        'notNull' => true,
                        'size' => "'male','female','none'",
                        'after' => 'birthdate'
                    ]
                ),
                new Column(
                    'email',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 45,
                        'after' => 'gender'
                    ]
                ),
                new Column(
                    'biography',
                    [
                        'type' => Column::TYPE_TEXT,
                        'notNull' => false,
                        'after' => 'email'
                    ]
                ),
                new Column(
                    'city',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 45,
                        'after' => 'biography'
                    ]
                ),
            ],
            'indexes' => [
                new Index('PRIMARY', ['id'], 'PRIMARY'),
                new Index('email', ['email'], 'UNIQUE'),
            ],
            'options' => [
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'utf8mb4_0900_ai_ci',
            ],
        ]);
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up(): void
    {
        $this->batchInsert('users', [
            'id',
            'first_name',
            'last_name',
            'birthdate',
            'gender',
            'email',
            'biography',
            'city',
        ]);
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down(): void
    {
        $this->batchDelete('users');
    }

    /**
     * This method is called after the table was created
     *
     * @return void
     */
    public function afterCreateTable(): void
    {
        $this->batchInsert('users', [
            'id',
            'first_name',
            'last_name',
            'birthdate',
            'gender',
            'email',
            'biography',
            'city',
        ]);
    }
}
