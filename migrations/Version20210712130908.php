<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Entity\DetailedObjectMatrixType;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210712130908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $rows = [
            '676c8477-86be-48aa-86eb-84d0d3fa7884' => 'c1c5486e-872e-4f54-a5b3-0f58eadca395',
            '3c67b09c-5eda-42cd-bfa1-ee3c0dc52cf0' => 'b7251843-1bf3-4fb0-963f-a084ace1a28c',
            'e8b8c41d-ec3c-4c08-9f41-65af3fc97b83' => 'acc4214d-b876-4617-9f8e-695c8f7d44c9',
            '5600360d-4e3d-4578-8943-3e25e1b0be98' => 'f1064c90-727e-4324-88c9-c667311e6698',
            'ba2661b8-395e-4ae7-a8cc-70b6f0de8dbe' => 'c2bd4853-76b3-4b4b-895c-30ff1d805ee9',
            'fd66a047-b5b1-428e-a540-2320e76b6388' => 'ee24d3c1-5dc5-42b1-b23c-9dbb9ecadc22',
            'accb6f7d-e02d-4892-879d-cdb7e1f724b0' => '42a712af-14d8-4fb0-b5de-3479d49ba840',
            '12f9fe74-3bd1-46c5-898f-83965d54a194' => 'd554651f-261b-4e6c-ac72-7919beb68ace',
            'fd674c8e-b40d-4a0c-b382-b771d4e38774' => 'c9d4f72a-2cc5-4bb0-aa3b-b0a087e70dae',
            'a549e5c3-b6b4-4d7a-87e2-2c344b8de011' => '2a153b15-3e23-48da-affa-09e5fece032f',
            '836072c0-dd49-4e9b-a0d6-9a8f3b076e53' => '9670fd68-00bd-4927-905c-eb067653375e',
            'db3b8aed-4ce9-4024-b1a9-7f19659d745a' => 'd30eb3cc-08f0-417e-94be-4e4a3283ac76',
            '878899be-2b2a-425a-89d6-90983ddb4b0f' => '2578298a-468d-496c-8695-55505a7c3712',
            '665c5274-668d-4150-a63b-a6dffd6677b6' => 'ff57e769-c732-4626-8bff-dcd69b579360',
            '5bd5635e-cb2d-4f13-9eae-55e51bcc17f0' => '63f2527e-84a2-46dd-9dd0-b54a3b4c69a2',
            '9f5d931c-8ad0-4ec6-85f2-c8caf1db681f' => 'ee3f028d-4545-48b1-8890-0c2533d4460f',
            '6dfdf51f-7df2-41a1-a839-1534d8dc0c41' => '2bd51bfa-3b01-4e26-b8e0-a7a276cc5a6a',
            'd13d59e7-fe89-468b-8b0b-c10ff86574ab' => '3b644669-1176-44af-84c0-979282cc7502',
            '005c7e6c-c938-46f0-8882-4fa407965b94' => 'e6781312-363c-462c-a661-e45316e36685', // Э2 end
            '5019b060-3863-4113-bd09-a4516113331a' => '7fa56bf7-5085-4d45-b96e-110a44eb0969',
            'aa1bd2ef-69ee-4dec-b3ca-e8987935fb3c' => '98b02f80-ac23-4095-b868-fa84693ce49c',
            '91dd608f-224b-4aed-9485-09046069ec1a' => 'd9870674-db56-4fe7-a598-0ba5fafe4ce0',
            '1aaf4be4-fe77-4e6a-b363-30bc1d06c9ad' => 'f31b0147-008e-4c41-9902-bb2194a2f351',
            '543e9ead-8cc5-4fa6-8e1e-c9a751e302d4' => '1732479b-5c16-435c-aa58-ffb9d718e286', // 5762, стоит 80 а нужно 90
            '441f4889-2eec-4933-b5b7-f98b17530586' => '927d6e67-0aeb-4c41-8ed8-54748e01cc0d', // 5761, стоит 0, а нужно 90
            '2c595709-28c6-4bb8-bc06-9cb75d33e3d1' => '3e881815-ad71-4175-b7a7-d82fc733b15a',
            '82a29278-7f7b-4c5d-b53d-57da2685ac8a' => '4169b6e2-6ed9-4e5a-b18a-a424b9136bdd',
            '02c1f02f-ded8-4b6a-9cc8-4c4501fe03b5' => '9f1d6f79-d049-4101-9f2a-aff28b5c8996',
            '7d143814-645f-43fe-9f88-ac849e2d94e7' => '977cad09-934b-4193-b7a2-33800adf9f5f',
            '5b039bb9-8b9c-4f78-8bd1-9c31e69d2f1b' => '8e59e1d0-e3cd-40ec-aea3-4bf6a27aa01f',
            '9b967499-8a05-4b45-b845-16a45ab93ff2' => '698c0755-f2c5-4ada-9545-4013b082145c',
            '27e6adcf-d796-4268-a1df-e5b3fdb15bfd' => '63108836-754e-4a1d-a91c-be1cdf96c218',
            'a134bac4-0b43-4124-b54b-d181a538e698' => '44e938cf-a719-4f70-9183-f858c4ff7e48',
            'f2f38534-371f-4094-9f6d-32c83ca46528' => '5aeb3e42-da90-40b7-b749-808c90263010',
            'c14f8110-42cb-464d-8eb1-f29023766e31' => '6010e094-387b-40f0-8db7-4e47141280cd',
            'ff6850c5-110e-4693-9521-0ca9989fbd4f' => '343e3353-308f-4bb8-8506-58846fc2d346',
            '16946e8f-5aa9-4e9c-8814-b6bf7000718c' => '7509f52d-182d-4b89-9155-273e0566a223',
            'b57e5593-d9df-4a8f-89e9-ac40bfeae505' => '2f716304-ed23-4f9d-8409-d822ecc4cb2e',
            'a4cce94e-59e4-41e9-b9d3-a8076ce88653' => '603b9dd0-cd51-4c8b-958d-b560cbc21b3c',
            'ae36ae7f-65e4-489f-bcdb-d69eb7738b85' => '171e33cb-7009-4535-960e-70a9765f0209',
            '9ac0b4c2-7365-4af1-9529-8df906d4cb2b' => '02a12bfb-ebc5-4813-8d72-50119e7f8b5f',
            'a5164e2a-b4d2-4707-9f79-a1952324d1ac' => '4347e610-8045-4917-8f13-1aad44125160',
            '0772e3a4-32b3-409e-a107-ae647514c83f' => 'ca594d26-a4bd-4cb3-8276-c963bfbf4cb0',
            'f1c0c014-ceab-4a1d-b542-df6d45ac2871' => 'e5c48f74-93db-4e48-bd5c-aebc6efaee68',
        ];
        $typeId = DetailedObjectMatrixType::InitStates;
        foreach ($rows as $objectId => $statusId){
            $sql = "INSERT INTO `detailed_object_matrix` (`object_id`, `type`, `value`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES ('$objectId', '$typeId', '$statusId', '1', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            $this->addSql($sql);
        }

        $rows = [
            '1aaf4be4-fe77-4e6a-b363-30bc1d06c9ad' => 0,
            '441f4889-2eec-4933-b5b7-f98b17530586' => 90,
            '543e9ead-8cc5-4fa6-8e1e-c9a751e302d4' => 90,
        ];
        $typeId = DetailedObjectMatrixType::ModificatorStates;
        foreach ($rows as $objectId => $value){
            $sql = "INSERT INTO `detailed_object_matrix` (`object_id`, `type`, `value`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES ('$objectId', '$typeId', '$value', '1', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
            $this->addSql($sql);
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
