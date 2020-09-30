<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InitMigration extends AbstractMigration
{
    public function up()
    {
        $artikel = $this->table('artikel');
        $artikel->addColumn('judul', 'string', array('limit' => 255))
            ->addColumn('isi', 'text')
            ->save();
    }

    public function down(): void
    {
        $this->table('artikel')->drop()->save();
    }
}
