<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Students;
use AppBundle\Entity\Classes;
use AppBundle\Entity\StudentClass;




class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
        return new View("Index page desactivated", Response::HTTP_OK);
    }

    /**
    * @Rest\Post("/student/")
    * @Route("/post-student/", name="post-student")
    */
     public function postStudentAction(Request $request)
     {
        $data = new Students;
        $first_name = $request->get('first_name');
        $last_name  = $request->get('last_name');
      
        //http://localhost:8000/post-student/?first_name=Jean&last_name=Jean
        
        //On vérifie qu'on a bien des valeurs en paramètre
        if(empty($first_name) || empty($last_name))
        {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE); 
        }

        //On construit l'objet Student 
        $data->setFirstName($first_name);
        $data->setLastName($last_name);

        //On enrgistre en BDD
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        //Affichage de la vue
        return new View("User Added Successfully", Response::HTTP_OK);
     }

    /**
    * @Rest\Post("/class/")
    * @Route("/post-class/", name="post-class")
    */
     public function postClassAction(Request $request)
     {

        $name = $request->get('name');
      
        $tab = explode("|",$name);

        $message = "";

        foreach($tab as $name){

            $data = new Classes;

            //http://localhost:8000/post-class/?name=classA|classB|classC
            
            //On vérifie qu'on a bien des valeurs en paramètre
            if(empty($name))
            {
                //return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE); 
                $message .= "NULL VALUES ARE NOT ALLOWED\r\n";
            }

            //On construit l'objet Class
            $data->setName($name);

            //On enrgistre en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();

            //Affichage de la vue
            $message .= "Class Added Successfully";
            //return new View("Class Added Successfully", Response::HTTP_OK);

        }

        return new View($message, Response::HTTP_OK);

     }

    /**
    * @Rest\Post("/student_class/")
    * @Route("/post-note/", name="post-note")
    */
     public function postNoteAction(Request $request)
     {
       
        $em = $this
            ->getDoctrine()
            ->getManager();

            $id_student = $request->get('id');
            $name = $request->get('name');
            $note = $request->get('note');
            
            $studentRepo = $em->getRepository('AppBundle:Students')->findOneBy(array('id'=>$id_student));
            $classRepo = $em->getRepository('AppBundle:Classes')->findOneBy(array('name'=>$name));

            $data = new StudentClass();

            if(empty($id_student) || empty($name) || empty($note))
                {
                    return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE); 
                }

            $data->setIdStudent($id_student);
            $data->setIdClass($classRepo->getId());
            $data->setNote($note);
            $data->setDateRegistration(time());

            var_dump($data->getIdStudent());

            //C'est ici que la valeur d'id_student passe à null

            $em->persist($data);
            $em->flush();

        //Affichage de la vue
        return new View("Note Added Successfully", Response::HTTP_OK);
     }

    
    /**
    * @Rest\Get"/student_class/")
    * @Route("/get-notes/", name="get-notes")
    */
    public function getNotesAction(Request $request)

       {
        
       }

    }



