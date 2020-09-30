<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EmailLogs extends AbstractMigration
{
    public function up(): void
    {
        $email_logs = $this->table('email_logs');
        $email_logs->addColumn('sent_time', 'datetime', array('null' => true))
            ->addColumn('sent_to', 'string', array('limit' => 255, 'null' => true))
            ->addColumn('subject', 'string', array('limit' => 255, 'null' => true))
            ->addColumn('message', 'text', array('null' => true))
            ->addColumn('sent_response', 'text', array('null' => true))
            ->save();
    }

    public function down(): void
    {
        $this->table('email_logs')->drop()->save();
    }
}
