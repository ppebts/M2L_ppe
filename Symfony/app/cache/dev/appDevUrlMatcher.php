<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/10f3619')) {
            // _assetic_10f3619
            if ($pathinfo === '/js/10f3619.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '10f3619',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_10f3619',);
            }

            if (0 === strpos($pathinfo, '/js/10f3619_part_1_')) {
                // _assetic_10f3619_0
                if ($pathinfo === '/js/10f3619_part_1_actualite_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '10f3619',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_10f3619_0',);
                }

                // _assetic_10f3619_1
                if ($pathinfo === '/js/10f3619_part_1_global_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '10f3619',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_10f3619_1',);
                }

                // _assetic_10f3619_2
                if ($pathinfo === '/js/10f3619_part_1_information_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '10f3619',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_10f3619_2',);
                }

                // _assetic_10f3619_3
                if ($pathinfo === '/js/10f3619_part_1_jquery_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '10f3619',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_10f3619_3',);
                }

            }

        }

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

        }

        // ppe_m2l_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ppe_m2l_homepage');
            }

            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ppe_m2l_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ppe_m2l_back_actualite
            if ($pathinfo === '/admin/listeactualite') {
                return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::getactualitesAction',  '_route' => 'ppe_m2l_back_actualite',);
            }

            // ppe_m2l_back_actualites
            if ($pathinfo === '/admin/actualites') {
                return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::addactualiteAction',  '_route' => 'ppe_m2l_back_actualites',);
            }

            // ppe_m2l_back_actu
            if (0 === strpos($pathinfo, '/admin/editactu') && preg_match('#^/admin/editactu/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ppe_m2l_back_actu')), array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::editactualiteAction',));
            }

        }

        // ppe_m2l_informations
        if ($pathinfo === '/informations') {
            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\DefaultController::informationAction',  '_route' => 'ppe_m2l_informations',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ppe_m2l_back_information
            if ($pathinfo === '/admin/listeinfo') {
                return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::getinformationsAction',  '_route' => 'ppe_m2l_back_information',);
            }

            // ppe_m2l_back_informations
            if ($pathinfo === '/admin/informations') {
                return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::addinformationAction',  '_route' => 'ppe_m2l_back_informations',);
            }

            // ppe_m2l_back_info
            if (0 === strpos($pathinfo, '/admin/editinfo') && preg_match('#^/admin/editinfo/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ppe_m2l_back_info')), array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::editinformationAction',));
            }

        }

        // ppe_m2l_reservations
        if ($pathinfo === '/reservations') {
            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\DefaultController::reservationsAction',  '_route' => 'ppe_m2l_reservations',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // ppe_m2l_annonces
            if ($pathinfo === '/annonces') {
                return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AnnonceController::afficherAction',  '_route' => 'ppe_m2l_annonces',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // ppe_m2l_back_annonce
                if ($pathinfo === '/admin/listeannonce') {
                    return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::getannoncesAction',  '_route' => 'ppe_m2l_back_annonce',);
                }

                // ppe_m2l_back_annonces
                if ($pathinfo === '/admin/annonces') {
                    return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::addannonceAction',  '_route' => 'ppe_m2l_back_annonces',);
                }

                // ppe_m2l_back_annonceedit
                if (0 === strpos($pathinfo, '/admin/editannonce') && preg_match('#^/admin/editannonce/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ppe_m2l_back_annonceedit')), array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::editannonceAction',));
                }

            }

        }

        // ppe_m2l_formations
        if ($pathinfo === '/formations') {
            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\DefaultController::formationAction',  '_route' => 'ppe_m2l_formations',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ppe_m2l_back_formation
            if ($pathinfo === '/admin/listeformation') {
                return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::getformationsAction',  '_route' => 'ppe_m2l_back_formation',);
            }

            // ppe_m2l_back_formations
            if ($pathinfo === '/admin/formations') {
                return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::addformationAction',  '_route' => 'ppe_m2l_back_formations',);
            }

            // ppe_m2l_back_formationedit
            if (0 === strpos($pathinfo, '/admin/editformation') && preg_match('#^/admin/editformation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ppe_m2l_back_formationedit')), array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::editformationAction',));
            }

        }

        // ppe_m2l_ligues
        if ($pathinfo === '/ligues') {
            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\DefaultController::ligueAction',  '_route' => 'ppe_m2l_ligues',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/li')) {
                // ppe_m2l_back_ligue
                if ($pathinfo === '/admin/listeligue') {
                    return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::getliguesAction',  '_route' => 'ppe_m2l_back_ligue',);
                }

                // ppe_m2l_back_ligues
                if ($pathinfo === '/admin/ligues') {
                    return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::addligueAction',  '_route' => 'ppe_m2l_back_ligues',);
                }

            }

            // ppe_m2l_back_ligueedit
            if (0 === strpos($pathinfo, '/admin/editligue') && preg_match('#^/admin/editligue/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ppe_m2l_back_ligueedit')), array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AdminController::editligueAction',));
            }

        }

        // ppe_m2l_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\ContactController::contactAction',  '_route' => 'ppe_m2l_contact',);
        }

        // ppe_m2l_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\AuthController::inscriptionAction',  '_route' => 'ppe_m2l_inscription',);
        }

        // ppe_m2l_account
        if ($pathinfo === '/account') {
            return array (  '_controller' => 'PPE\\M2LBundle\\Controller\\DefaultController::accountAction',  '_route' => 'ppe_m2l_account',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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
