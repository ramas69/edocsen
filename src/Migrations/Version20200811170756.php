<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200811170756 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE extrait_naissance ADD pays_naissance VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE mariage ADD pays_naissance VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE deces ADD pays_naissance VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE casier ADD pays_naissance VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casier DROP pays_naissance');
        $this->addSql('ALTER TABLE deces DROP pays_naissance');
        $this->addSql('ALTER TABLE extrait_naissance DROP pays_naissance');
        $this->addSql('ALTER TABLE mariage DROP pays_naissance');
    }
}
