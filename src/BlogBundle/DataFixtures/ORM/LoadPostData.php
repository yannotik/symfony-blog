<?php
namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Post;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadPostData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 200; $i++) {
            $date = new \DateTime();
            $date->sub(new \DateInterval('P' . rand(1, 999) . 'D'));
            $post = new Post();
            $post->setTitle('Some random post ' . rand(1, 999999));
            $post->setContent('Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. "Риба" не тільки успішно пережила п\'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Вона популяризувалась в 60-их роках минулого сторіччя завдяки виданню зразків шрифтів Letraset, які містили уривки з Lorem Ipsum, і вдруге - нещодавно завдяки програмам комп\'ютерного верстування на кшталт Aldus Pagemaker, які використовували різні версії Lorem Ipsum.');
            $post->setCreatedAt($date);
            $manager->persist($post);
        }
        $manager->flush();
    }
}
