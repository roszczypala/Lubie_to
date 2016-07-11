<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/crew')) {
            // crew
            if (rtrim($pathinfo, '/') === '/crew') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_crew;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'crew');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CrewController::indexAction',  '_route' => 'crew',);
            }
            not_crew:

            // crew_create
            if ($pathinfo === '/crew/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_crew_create;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CrewController::createAction',  '_route' => 'crew_create',);
            }
            not_crew_create:

            // crew_new
            if ($pathinfo === '/crew/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_crew_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CrewController::newAction',  '_route' => 'crew_new',);
            }
            not_crew_new:

            // crew_show
            if (preg_match('#^/crew/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_crew_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crew_show')), array (  '_controller' => 'AppBundle\\Controller\\CrewController::showAction',));
            }
            not_crew_show:

            // crew_edit
            if (preg_match('#^/crew/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_crew_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crew_edit')), array (  '_controller' => 'AppBundle\\Controller\\CrewController::editAction',));
            }
            not_crew_edit:

            // crew_update
            if (preg_match('#^/crew/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_crew_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crew_update')), array (  '_controller' => 'AppBundle\\Controller\\CrewController::updateAction',));
            }
            not_crew_update:

            // crew_delete
            if (preg_match('#^/crew/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_crew_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crew_delete')), array (  '_controller' => 'AppBundle\\Controller\\CrewController::deleteAction',));
            }
            not_crew_delete:

            // app_crew_addusertocrew
            if (0 === strpos($pathinfo, '/crew/addUser') && preg_match('#^/crew/addUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_crew_addusertocrew')), array (  '_controller' => 'AppBundle\\Controller\\CrewController::addUserToCrewAction',));
            }

            // app_crew_removeuserfromcrew
            if (0 === strpos($pathinfo, '/crew/removeUser') && preg_match('#^/crew/removeUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_crew_removeuserfromcrew')), array (  '_controller' => 'AppBundle\\Controller\\CrewController::removeUserFromCrew',));
            }

        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if (rtrim($pathinfo, '/') === '/event') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EventController::indexAction',  '_route' => 'event',);
            }
            not_event:

            // event_create
            if (0 === strpos($pathinfo, '/event/create') && preg_match('#^/event/create/(?P<crewId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_create')), array (  '_controller' => 'AppBundle\\Controller\\EventController::createAction',));
            }

            // event_new
            if (rtrim($pathinfo, '/') === '/event/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event_new');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
            }
            not_event_new:

            // event_show
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'AppBundle\\Controller\\EventController::showAction',));
            }

            // event_edit
            if (preg_match('#^/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'AppBundle\\Controller\\EventController::editAction',));
            }
            not_event_edit:

            // event_update
            if (preg_match('#^/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_event_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update')), array (  '_controller' => 'AppBundle\\Controller\\EventController::updateAction',));
            }
            not_event_update:

            // event_delete
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_event_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'AppBundle\\Controller\\EventController::deleteAction',));
            }
            not_event_delete:

            // app_event_addusertoevent
            if (0 === strpos($pathinfo, '/event/addUserEvent') && preg_match('#^/event/addUserEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_event_addusertoevent')), array (  '_controller' => 'AppBundle\\Controller\\EventController::addUserToEventAction',));
            }

            // app_event_removeuserfromevent
            if (0 === strpos($pathinfo, '/event/removeUser') && preg_match('#^/event/removeUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_event_removeuserfromevent')), array (  '_controller' => 'AppBundle\\Controller\\EventController::removeUserFromEvent',));
            }

        }

        // app_main_main
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_main_main');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::mainAction',  '_route' => 'app_main_main',);
        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  '_route' => 'index',);
        }

        // app_main_user
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_main_user')), array (  '_controller' => 'AppBundle\\Controller\\MainController::userAction',));
        }

        if (0 === strpos($pathinfo, '/message')) {
            // app_message_new
            if (0 === strpos($pathinfo, '/message/new') && preg_match('#^/message/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_message_new')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::newAction',));
            }

            // message_show
            if (preg_match('#^/message/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_message_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_show')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::showAction',));
            }
            not_message_show:

            // message
            if (rtrim($pathinfo, '/') === '/message') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'message');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MessageController::allMessagesAction',  '_route' => 'message',);
            }

            // app_message_delete
            if (0 === strpos($pathinfo, '/message/delete') && preg_match('#^/message/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_message_delete')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/photo')) {
            // photo
            if (rtrim($pathinfo, '/') === '/photo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_photo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'photo');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PhotoController::indexAction',  '_route' => 'photo',);
            }
            not_photo:

            // photo_crew_create
            if (0 === strpos($pathinfo, '/photo/crew/create') && preg_match('#^/photo/crew/create/(?P<crewId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_crew_create')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::crewCreateAction',));
            }

            // photo_event_create
            if (0 === strpos($pathinfo, '/photo/event/create') && preg_match('#^/photo/event/create/(?P<eventId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_event_create')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::eventCreateAction',));
            }

            // photo_user_create
            if (0 === strpos($pathinfo, '/photo/user/create') && preg_match('#^/photo/user/create/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_user_create')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::userCreateAction',));
            }

            // photo_show
            if (preg_match('#^/photo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_photo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_show')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::showAction',));
            }
            not_photo_show:

            // photo_edit
            if (preg_match('#^/photo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_photo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_edit')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::editAction',));
            }
            not_photo_edit:

            // photo_update
            if (preg_match('#^/photo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_photo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_update')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::updateAction',));
            }
            not_photo_update:

            // photo_delete
            if (preg_match('#^/photo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_photo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_delete')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::deleteAction',));
            }
            not_photo_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // app_user_showindex
            if ($pathinfo === '/admin/index') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::showIndexAction',  '_route' => 'app_user_showindex',);
            }

            // app_user_showallusers
            if ($pathinfo === '/admin/users') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::showAllUsersAction',  '_route' => 'app_user_showallusers',);
            }

            // app_user_removeuser
            if (0 === strpos($pathinfo, '/admin/remove') && preg_match('#^/admin/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_removeuser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeUserAction',));
            }

            if (0 === strpos($pathinfo, '/admin/crew')) {
                // app_user_showallcrews
                if ($pathinfo === '/admin/crews') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::showAllCrewsAction',  '_route' => 'app_user_showallcrews',);
                }

                // app_user_removecrew
                if (0 === strpos($pathinfo, '/admin/crew/remove') && preg_match('#^/admin/crew/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_removecrew')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeCrewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/event')) {
                // app_user_showallevents
                if ($pathinfo === '/admin/events') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::showAllEventsAction',  '_route' => 'app_user_showallevents',);
                }

                // app_user_removeevent
                if (0 === strpos($pathinfo, '/admin/event/remove') && preg_match('#^/admin/event/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_removeevent')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeEventAction',));
                }

            }

            // app_user_setaccepttocrew
            if (0 === strpos($pathinfo, '/admin/crew/getAccepted') && preg_match('#^/admin/crew/getAccepted/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_setaccepttocrew')), array (  '_controller' => 'AppBundle\\Controller\\UserController::setAcceptToCrewAction',));
            }

            // app_user_setaccepttoevent
            if (0 === strpos($pathinfo, '/admin/event/getAccepted') && preg_match('#^/admin/event/getAccepted/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_setaccepttoevent')), array (  '_controller' => 'AppBundle\\Controller\\UserController::setAcceptToEventAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
