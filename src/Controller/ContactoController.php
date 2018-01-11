<?php
/**
 * Created by PhpStorm.
 * User: avera
 * Date: 9/01/18
 * Time: 03:14 PM
 */

namespace App\Controller;

use App\Entity\Contacto;
use App\Form\ContactoType;
use function dump;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Bundle\SwiftmailerBundle\DependencyInjection\Compiler\RegisterPluginsPass;

class ContactoController extends Controller
{
    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction(Request $request)
    {
        $contacto = new Contacto();

        $form = $this->createForm (ContactoType::class, $contacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contacto = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($contacto);
            $em->flush();

//            $mail = \Swift_Mailer();
            $this->enviarCorreoAction ($contacto->getNombre(),$contacto->getTelefono(),$contacto->getCorreo(),$contacto->getTipo(),$contacto->getMensaje());
            return $this->redirectToRoute('inicio');
        }
        return $this->render('Page/contacto.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function enviarCorreoAction($name, $telefono, $correo, $tipo, $mensaje)
    {
        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
            ->setUsername('sogainformacion@gmail.com')
            ->setPassword('70143086')
        ;

        $mailer = new \Swift_Mailer($transport);
        $message = (new \Swift_Message($mensaje))
            ->setSubject('Contacto desde la Página Web')
            ->setFrom('sogainformacion@gmail.com')
            ->setTo('desarrollo4@appsoga.com')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'Email/General/contactoweb.html.twig',
                    array('nombre' => $name,
                          'telefono' => $telefono,
                          'correo' => $correo,
                          'tipo' => $tipo,
                          'mensaje' => $mensaje
                    )
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        $mailer->send($message);
//
//        return $this->render('Page/indexPage.html.twig');
    }
}