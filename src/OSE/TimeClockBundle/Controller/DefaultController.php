<?php

namespace OSE\TimeClockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('OSEUserBundle:User')->findAll(); 

        foreach($users as $user) {

            $result = $em->createQueryBuilder('q')
                ->from('OSETimeClockBundle:Entry','e')
                ->select('e')
                ->where('e.user_id = :userid')
                ->orderBy('e.time','DESC')
                ->setParameter('userid',$user->getId())
                ->setMaxResults(1)
                ->getQuery()
                ->execute(); 

            if($result) $entries[] = $result[0];
        }

        return $this->render('OSETimeClockBundle:Default:index.html.twig',compact('entries'));
    }
}
