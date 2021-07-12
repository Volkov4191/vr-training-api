<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use App\Entity\DetailedObjectTargetRange;
use App\Entity\DetailedObjectTargetStatus;
use App\Entity\Dialog;
use App\Entity\DialogMessage;
use App\Entity\Question;
use App\Entity\QuestionAnswer;
use App\Entity\Scenario;
use App\Entity\Stage;
use App\Entity\Step;
use App\Entity\StepAnimation;
use App\Entity\StepQuestion;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Главная страница
 *
 * Class DashboardController
 * @package App\Controller\Admin
 */
class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Constructor360 Local');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Clients', 'fas fa-list', Client::class);
        yield MenuItem::linkToCrud('Scenarios', 'fas fa-list', Scenario::class);
        yield MenuItem::linkToCrud('Stages', 'fas fa-list', Stage::class);
        yield MenuItem::linkToCrud('Steps', 'fas fa-list', Step::class);
        yield MenuItem::linkToCrud('Dialogs', 'fas fa-list', Dialog::class);
        yield MenuItem::linkToCrud('Dialog Messages', 'fas fa-list', DialogMessage::class);
        yield MenuItem::linkToCrud('DO Target Status', 'fas fa-list', DetailedObjectTargetStatus::class);
        yield MenuItem::linkToCrud('DO Target Range', 'fas fa-list', DetailedObjectTargetRange::class);
        yield MenuItem::linkToCrud('Questions', 'fas fa-list', Question::class);
        yield MenuItem::linkToCrud('Question Answers', 'fas fa-list', QuestionAnswer::class);
        yield MenuItem::linkToCrud('Step Questions', 'fas fa-list', StepQuestion::class);
        yield MenuItem::linkToCrud('Step Animations', 'fas fa-list', StepAnimation::class);
    }
}
