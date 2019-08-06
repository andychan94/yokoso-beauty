<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190609052532 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Feedback (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, rating INT NOT NULL, comment LONGTEXT NOT NULL, isConfirmed TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE Feedbacks');
        $this->addSql('ALTER TABLE bitbag_cms_page_products DROP FOREIGN KEY FK_4D64FA85C4663E4');
        $this->addSql('ALTER TABLE bitbag_cms_page_products ADD CONSTRAINT FK_4D64FA85C4663E4 FOREIGN KEY (page_id) REFERENCES bitbag_cms_page (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bitbag_cms_page_sections DROP FOREIGN KEY FK_D548E347E9ED820C');
        $this->addSql('ALTER TABLE bitbag_cms_page_sections ADD CONSTRAINT FK_D548E347E9ED820C FOREIGN KEY (block_id) REFERENCES bitbag_cms_page (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bitbag_cms_page_channels DROP FOREIGN KEY FK_DCA4269C4663E4');
        $this->addSql('ALTER TABLE bitbag_cms_page_channels ADD CONSTRAINT FK_DCA4269C4663E4 FOREIGN KEY (page_id) REFERENCES bitbag_cms_page (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bitbag_cms_block_channels DROP FOREIGN KEY FK_8417B073E9ED820C');
        $this->addSql('ALTER TABLE bitbag_cms_block_channels ADD CONSTRAINT FK_8417B073E9ED820C FOREIGN KEY (block_id) REFERENCES bitbag_cms_block (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bitbag_cms_media_channels DROP FOREIGN KEY FK_D109622EE9ED820C');
        $this->addSql('ALTER TABLE bitbag_cms_media_channels ADD CONSTRAINT FK_D109622EE9ED820C FOREIGN KEY (block_id) REFERENCES bitbag_cms_media (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bitbag_cms_faq_translation CHANGE question question LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE bitbag_cms_faq_channels DROP FOREIGN KEY FK_FF6D59AC81BEC8C2');
        $this->addSql('ALTER TABLE bitbag_cms_faq_channels ADD CONSTRAINT FK_FF6D59AC81BEC8C2 FOREIGN KEY (faq_id) REFERENCES bitbag_cms_faq (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bitbag_cms_media_translation ADD link LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Feedbacks (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, rating INT NOT NULL, comment LONGTEXT NOT NULL COLLATE utf8_unicode_ci, isConfirmed TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE Feedback');
        $this->addSql('ALTER TABLE bitbag_cms_block_channels DROP FOREIGN KEY FK_8417B073E9ED820C');
        $this->addSql('ALTER TABLE bitbag_cms_block_channels ADD CONSTRAINT FK_8417B073E9ED820C FOREIGN KEY (block_id) REFERENCES bitbag_cms_block (id)');
        $this->addSql('ALTER TABLE bitbag_cms_faq_channels DROP FOREIGN KEY FK_FF6D59AC81BEC8C2');
        $this->addSql('ALTER TABLE bitbag_cms_faq_channels ADD CONSTRAINT FK_FF6D59AC81BEC8C2 FOREIGN KEY (faq_id) REFERENCES bitbag_cms_faq (id)');
        $this->addSql('ALTER TABLE bitbag_cms_faq_translation CHANGE question question VARCHAR(1500) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE bitbag_cms_media_channels DROP FOREIGN KEY FK_D109622EE9ED820C');
        $this->addSql('ALTER TABLE bitbag_cms_media_channels ADD CONSTRAINT FK_D109622EE9ED820C FOREIGN KEY (block_id) REFERENCES bitbag_cms_media (id)');
        $this->addSql('ALTER TABLE bitbag_cms_media_translation DROP link');
        $this->addSql('ALTER TABLE bitbag_cms_page_channels DROP FOREIGN KEY FK_DCA4269C4663E4');
        $this->addSql('ALTER TABLE bitbag_cms_page_channels ADD CONSTRAINT FK_DCA4269C4663E4 FOREIGN KEY (page_id) REFERENCES bitbag_cms_page (id)');
        $this->addSql('ALTER TABLE bitbag_cms_page_products DROP FOREIGN KEY FK_4D64FA85C4663E4');
        $this->addSql('ALTER TABLE bitbag_cms_page_products ADD CONSTRAINT FK_4D64FA85C4663E4 FOREIGN KEY (page_id) REFERENCES bitbag_cms_page (id)');
        $this->addSql('ALTER TABLE bitbag_cms_page_sections DROP FOREIGN KEY FK_D548E347E9ED820C');
        $this->addSql('ALTER TABLE bitbag_cms_page_sections ADD CONSTRAINT FK_D548E347E9ED820C FOREIGN KEY (block_id) REFERENCES bitbag_cms_page (id)');
    }
}
