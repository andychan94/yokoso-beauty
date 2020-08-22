<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190210083245 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sylius_product_translation_copy');
        $this->addSql('ALTER TABLE sylius_product_variant ADD link_to_original VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_order DROP admin_notified');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sylius_product_translation_copy (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, slug VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8mb4_general_ci, meta_keywords VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, meta_description VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, short_description LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, locale VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, INDEX IDX_105A9082C2AC5D3 (translatable_id), UNIQUE INDEX UNIQ_105A9084180C698989D9B62 (locale, slug), UNIQUE INDEX sylius_product_translation_uniq_trans (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE sylius_order ADD admin_notified INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE sylius_product_variant DROP link_to_original');
    }
}
