<?php

namespace ProductBundle\Controller;

use BddBundle\Entity\User;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $u = $this->container->get('security.token_storage')->getToken()->getUser();
        switch ($u->getRoles()[0]){
            case "ROLE_ADMIN":return $this->redirect('back/admin');break;
            case "ROLE_EXPERT":return $this->redirect('back/expert');break;
            case "ROLE_JARDINIER":return $this->redirect('back/jardinier');break;
        }

        return $this->render('BddBundle:Default:index.html.twig');
    }

    public function adminAction()
    {
        return $this->render('BddBundle:Default:admininterface.html.twig');
    }

    public function expertAction()
    {
        return $this->render('@Bdd/Default/expertinterface.html.twig');
    }
    public function jardinierAction()
    {
        return $this->render('BddBundle:Default:jardnierinterface.html.twig');
    }
    public function StatAction()
    {
        $pieChart = new PieChart();

        $data= array();
        $stat=['produit', 'quantite'];
        array_push($data,$stat);

        $query = $this->getDoctrine()->getManager()->createQuery(
            'SELECT SUM(l.qte) as quantite, p.nomProd  FROM  BddBundle:LigneCommande l JOIN l.idproduit p
            GROUP BY l.idproduit ORDER BY quantite desc');

        $query->setFirstResult(0);
        $query->setMaxResults(5);
        $results=$query->getResult();


        foreach($results as $result) {

            $stat=array($result['nomProd'],intval($result['quantite']));
            array_push($data,$stat);
        }

        $pieChart->getData()->setArrayToDataTable(
            $data
        );

        $pieChart->getOptions()->setTitle('Top Vente');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('@Product/Default/index1.html.twig', array('piechart' => $pieChart));
    }

}
