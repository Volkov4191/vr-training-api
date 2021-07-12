<?php

namespace App\Service\Step;

use App\Entity\DetailedObjectTargetRange;
use App\Entity\StepAnimation;
use App\Repository\DetailedObjectTargetRangeRepository;
use App\Repository\StepAnimationRepository;
use Doctrine\Persistence\ObjectRepository;
use JetBrains\PhpStorm\ArrayShape;

/**
 * Билдер для формирования шага с электрозадвижками
 *
 * Class ValveTargetRangeJsonBuilder
 * @package App\Service\Step
 */
class ValveTargetRangeJsonBuilder  extends DefaultJsonBuilder
{
    const DefaultMapId = '39b8c323-2726-4e88-8273-5bcf5e9f166e';

    /**
     * @return array
     *  TODO: Переделать MapID под колонку
     *  TODO: Переделать анимации под привязку к каждому клапану
     */
    #[ArrayShape(['Points' => "array", "CheckType" => "string", 'MapID' => "string"])]
    public function generateConfigJson(): array
    {
        /** @var DetailedObjectTargetRangeRepository $repository */
        $repository = $this->getRepository();
        /** @var DetailedObjectTargetRange[] $targetRanges */
        $targetRanges = $repository->findByStep($this->step);
        $response = [ "CheckType" => "All", 'MapID' => self::DefaultMapId, 'Points' => []];

        $stepAnimationRepository = $this->getAnimationRepository();
        $stepAnimations = $stepAnimationRepository->findByStep($this->step);

        foreach ($targetRanges as $targetRange){
            $point = ['PointAnimations' => [], 'Point' => []];
            $point['Point']['ObjectID'] = $targetRange->getObject()->getId();
            $point['Point']['ValueTo'] = $targetRange->getValueTo();
            $animations = [];
            foreach ($stepAnimations as $stepAnimation){
                $animations[] = [
                    'Duration' => $stepAnimation->getDuration(),
                    'StatusID' => $stepAnimation->getToStatus()->getId(),
                ];
            }
            $point['PointAnimations'] = $animations;
            $response['Points'][] = $point;
        }
        return $response;
    }

    /**
     * @return DetailedObjectTargetRangeRepository
     */
    private function getRepository(): ObjectRepository
    {
        return $this->registry->getRepository(DetailedObjectTargetRange::class);
    }

    /**
     * @return StepAnimationRepository
     */
    private function getAnimationRepository() : StepAnimationRepository
    {
        return $this->registry->getRepository(StepAnimation::class);
    }
}