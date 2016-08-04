<?php

namespace Unit\TwitterEntry\Mode;

use Unit\Publisher\Mode\Recommendation\RecommendationInterfaceTest;

class TwitterUserRecommendationTest extends RecommendationInterfaceTest
{
    
    protected function getEntryName()
    {
        return 'Publisher\\Entry\\Twitter\\TwitterUserEntry';
    }
    
    public function getValidRecommendationParameters()
    {
        return array(
            array('message', '', '', null),
            array('message', 'title', 'url@foo.com', time() + (0 * 0 * 10 * 0))
        );
    }
    
    public function getRecommendationParametersAndResult()
    {
        return array(
            array(
                'message',
                'url@foo.com',
                'title',
                time() + (0 * 0 * 10 * 0),
                array(
                    'status' => "title\nmessage\nurl@foo.com"
                )
             )
        );
    }
}