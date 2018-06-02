<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602003928 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cadastro (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, nascimento VARCHAR(10) NOT NULL, cpf VARCHAR(11) NOT NULL, cep VARCHAR(8) NOT NULL, estado VARCHAR(2) NOT NULL, cidade VARCHAR(255) NOT NULL, bairro VARCHAR(255) NOT NULL, endereco VARCHAR(255) NOT NULL, numero INT DEFAULT NULL, complemento VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_CBC684923E3E11F0 (cpf), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cadastro');
    }
}
