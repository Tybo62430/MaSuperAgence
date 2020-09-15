<?php

namespace App\Listener;

use Doctrine\Common\EventSubscriber;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;
use Doctrine\Persistence\Event\LifecycleEventArgs;


class ImageCacheSubscriber implements EventSubscriber {
    
    /**
     *
     * @var CacheManager 
     */
    private $cacheManager;
    
    /**
     *
     * @var UploaderHelper 
     */
    private $uploaderHelper;
    
    public function __construct(CacheManager $cacheManager, UploaderHelper $uploaderHelper) {
        $this->cacheManager = $cacheManager;
        $this-> uploaderHelper = $uploaderHelper;
    }
    
    public function getSubscribedEvents(){
        return [
            'preRemouve',
            'preUpdate'
        ];
    }
    
    public function preRemouve(LifecycleEventArgs $args) {
        $entity = $args >getEntity();
        
        if($entity instanceof UploaderFile){
            return;
        }
        
        $this->cacheManager->remove($this->uploaderHelper->asset($entity, 'imageFile'));
        
    }
    
    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args >getEntity();
        
        if($entity instanceof UploaderFile){
            return;
        }
        if($entity->getImageFile() instanceof UploaderFile){
            
            $this->cacheManager->remove($this->uploaderHelper->asset($entity, 'imageFile'));
            
        }    
    }
}
