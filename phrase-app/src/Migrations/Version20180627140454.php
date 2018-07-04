<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180627140454 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE product (id INTEGER NOT NULL, price INTEGER NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product_translation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, translatable_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, locale VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_1846DB702C2AC5D3 ON product_translation (translatable_id)');
        $this->addSql('CREATE UNIQUE INDEX product_translation_unique_translation ON product_translation (translatable_id, locale)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_translation');
    }
}
