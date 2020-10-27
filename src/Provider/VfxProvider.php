<?php


namespace App\Provider;


use App\Helper\VideoTypeHelper;
use App\Model\Video;

class VfxProvider
{
    const NAME = 'name';
    const CODE = 'code';
    const TYPE = 'type';
    
    public function getVfxVideos()
    {
        return array_map(function ($datum) {
            return new Video($datum[self::NAME], $datum[self::CODE], $datum[self::TYPE]);
        }, $this->data());
    }
    
    private function data()
    {
        return [
            [
                self::NAME => 'Animated Matte Painting',
                self::CODE => '0mDdP1kqOLY',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Camera Projection - Water Effect',
                self::CODE => '0fOUqSQ_TYs',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => '3D Tracking - Colo Correction',
                self::CODE => 'aQFjIluYmG0',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => '3D Tracking - Object Replacement',
                self::CODE => 'YZ-w3k_Lcm4',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Particles Emitter',
                self::CODE => 'USRqF7g6JjM',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Geometry Tracking',
                self::CODE => 'ayu1OZhnLz4',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => '3D Tracking',
                self::CODE => 'ZabF8gn9FQM',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Keylight - 3D Tracking PfTrack',
                self::CODE => '7iubX_ixj3A',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => '2D Tracking - Light Effects',
                self::CODE => 't5wDLpTiSqY',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Keylight - 3D Tracking - Moving Set',
                self::CODE => 'BDThv3fTViE',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Underwater Colorymetry',
                self::CODE => 'Ow-jC8Iwgpk',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Shadows From Camera Projection',
                self::CODE => 'FwEWqwJXWEQ',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Full CG Integration',
                self::CODE => 'HW3amxpDpQI',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Animated Matte Painting',
                self::CODE => 'puypIj4z_Bs',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
            [
                self::NAME => 'Photogrammetry - 3D Tracking',
                self::CODE => 'SupdC4Tr7CM',
                self::TYPE => VideoTypeHelper::YOUTUBE,
            ],
        ];
    }
}