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

        if (0 === strpos($pathinfo, '/document')) {
            // document
            if (rtrim($pathinfo, '/') === '/document') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'document');
                }

                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\DocumentController::indexAction',  '_route' => 'document',);
            }

            // document_show
            if (preg_match('#^/document/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_show')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\DocumentController::showAction',));
            }

            // document_new
            if ($pathinfo === '/document/new') {
                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\DocumentController::newAction',  '_route' => 'document_new',);
            }

            // document_create
            if ($pathinfo === '/document/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_document_create;
                }

                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\DocumentController::createAction',  '_route' => 'document_create',);
            }
            not_document_create:

            // document_edit
            if (preg_match('#^/document/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_edit')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\DocumentController::editAction',));
            }

            // document_update
            if (preg_match('#^/document/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_document_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_update')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\DocumentController::updateAction',));
            }
            not_document_update:

            // document_delete
            if (preg_match('#^/document/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_document_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_delete')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\DocumentController::deleteAction',));
            }
            not_document_delete:

        }

        if (0 === strpos($pathinfo, '/incident')) {
            // cert_incident_accueil
            if ($pathinfo === '/incident') {
                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::indexAction',  '_route' => 'cert_incident_accueil',);
            }

            // cert_incident_apropos
            if ($pathinfo === '/incident/apropos') {
                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::aproposAction',  '_route' => 'cert_incident_apropos',);
            }

            // cert_incident_services
            if ($pathinfo === '/incident/services') {
                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::servicesAction',  '_route' => 'cert_incident_services',);
            }

            // cert_incident_partenaires
            if ($pathinfo === '/incident/partenaires') {
                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::partenairesAction',  '_route' => 'cert_incident_partenaires',);
            }

            // cert_incident_contact
            if ($pathinfo === '/incident/contact') {
                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::contactAction',  '_route' => 'cert_incident_contact',);
            }

            // cert_incident_declarer
            if ($pathinfo === '/incident/di') {
                return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::declarerAction',  '_route' => 'cert_incident_declarer',);
            }

            if (0 === strpos($pathinfo, '/incident/li')) {
                // cert_incident_ListingIncident
                if ($pathinfo === '/incident/li') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::listerIncidentAction',  '_route' => 'cert_incident_ListingIncident',);
                }

                // cert_incident_ListingVulnerabilite
                if ($pathinfo === '/incident/listeVulnerabilite') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::listerVulnerabiliteAction',  '_route' => 'cert_incident_ListingVulnerabilite',);
                }

            }

            if (0 === strpos($pathinfo, '/incident/a')) {
                // cert_incident_ListeAlerte
                if ($pathinfo === '/incident/alertes') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::listeAlerteAction',  '_route' => 'cert_incident_ListeAlerte',);
                }

                // cert_incident_ListeAnnonce
                if ($pathinfo === '/incident/annonces') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::listeAnnonceAction',  '_route' => 'cert_incident_ListeAnnonce',);
                }

                // cert_incident_articles
                if ($pathinfo === '/incident/articles') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::listeArticlesAction',  '_route' => 'cert_incident_articles',);
                }

            }

        }

        // cert_incident_voirAlerte
        if (preg_match('#^/(?P<id>[^/]++)/voirAlerte$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cert_incident_voirAlerte')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::voirAlerteAction',));
        }

        // cert_incident_voirVulnerabilite
        if (preg_match('#^/(?P<id>[^/]++)/voirVulnerabilite$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cert_incident_voirVulnerabilite')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::voirVulnerabiliteAction',));
        }

        // cert_incident_voirAnnonce
        if (preg_match('#^/(?P<id>[^/]++)/annonce$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cert_incident_voirAnnonce')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\IncidentController::annonceAction',));
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // sdz_blog_homepage
            if (0 === strpos($pathinfo, '/blog/hello') && preg_match('#^/blog/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdz_blog_homepage')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\DefaultController::indexAction',));
            }

            // sdzblog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_accueil')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // sdzblog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // sdzblog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'sdzblog_ajouter',);
                }

            }

            // sdzblog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_modifier')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // sdzblog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_supprimer')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

            // sdzblog_voir_slug
            if (preg_match('#^/blog/(?P<annee>\\d{4})/(?P<slug>[^/\\.]++)(?:\\.(?P<format>html|xml))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir_slug')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirSlugAction',  'format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/articles')) {
                // admin_articles
                if (rtrim($pathinfo, '/') === '/admin/articles') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_articles');
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'admin_articles',);
                }

                // admin_articles_show
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_articles_show')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\ArticlesController::showAction',));
                }

                // admin_articles_new
                if ($pathinfo === '/admin/articles/new') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\ArticlesController::newAction',  '_route' => 'admin_articles_new',);
                }

                // admin_articles_create
                if ($pathinfo === '/admin/articles/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_articles_create;
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\ArticlesController::createAction',  '_route' => 'admin_articles_create',);
                }
                not_admin_articles_create:

                // admin_articles_edit
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_articles_edit')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\ArticlesController::editAction',));
                }

                // admin_articles_update
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_articles_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_articles_update')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\ArticlesController::updateAction',));
                }
                not_admin_articles_update:

                // admin_articles_delete
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_articles_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_articles_delete')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\ArticlesController::deleteAction',));
                }
                not_admin_articles_delete:

            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // admin_users
                if (rtrim($pathinfo, '/') === '/admin/users') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_users');
                    }

                    return array (  '_controller' => 'Cert\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_users',);
                }

                // admin_users_show
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_show')), array (  '_controller' => 'Cert\\UserBundle\\Controller\\UserController::showAction',));
                }

                // admin_users_new
                if ($pathinfo === '/admin/users/new') {
                    return array (  '_controller' => 'Cert\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'admin_users_new',);
                }

                // admin_users_create
                if ($pathinfo === '/admin/users/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_users_create;
                    }

                    return array (  '_controller' => 'Cert\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'admin_users_create',);
                }
                not_admin_users_create:

                // admin_users_edit
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_edit')), array (  '_controller' => 'Cert\\UserBundle\\Controller\\UserController::editAction',));
                }

                // admin_users_update
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_users_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_update')), array (  '_controller' => 'Cert\\UserBundle\\Controller\\UserController::updateAction',));
                }
                not_admin_users_update:

                // admin_users_delete
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_users_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_delete')), array (  '_controller' => 'Cert\\UserBundle\\Controller\\UserController::deleteAction',));
                }
                not_admin_users_delete:

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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/annonce')) {
                // admin_annonce
                if (rtrim($pathinfo, '/') === '/admin/annonce') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_annonce');
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AnnonceController::indexAction',  '_route' => 'admin_annonce',);
                }

                // admin_annonce_show
                if (preg_match('#^/admin/annonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_annonce_show')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AnnonceController::showAction',));
                }

                // admin_annonce_new
                if ($pathinfo === '/admin/annonce/new') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AnnonceController::newAction',  '_route' => 'admin_annonce_new',);
                }

                // admin_annonce_create
                if ($pathinfo === '/admin/annonce/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_annonce_create;
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AnnonceController::createAction',  '_route' => 'admin_annonce_create',);
                }
                not_admin_annonce_create:

                // admin_annonce_edit
                if (preg_match('#^/admin/annonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_annonce_edit')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AnnonceController::editAction',));
                }

                // admin_annonce_update
                if (preg_match('#^/admin/annonce/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_annonce_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_annonce_update')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AnnonceController::updateAction',));
                }
                not_admin_annonce_update:

                // admin_annonce_delete
                if (preg_match('#^/admin/annonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_annonce_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_annonce_delete')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AnnonceController::deleteAction',));
                }
                not_admin_annonce_delete:

            }

            if (0 === strpos($pathinfo, '/admin/vulnerabilite')) {
                // admin_vulnerabilite
                if (rtrim($pathinfo, '/') === '/admin/vulnerabilite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_vulnerabilite');
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\VulnerabiliteController::indexAction',  '_route' => 'admin_vulnerabilite',);
                }

                // admin_vulnerabilite_show
                if (preg_match('#^/admin/vulnerabilite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vulnerabilite_show')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\VulnerabiliteController::showAction',));
                }

                // admin_vulnerabilite_new
                if ($pathinfo === '/admin/vulnerabilite/new') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\VulnerabiliteController::newAction',  '_route' => 'admin_vulnerabilite_new',);
                }

                // admin_vulnerabilite_create
                if ($pathinfo === '/admin/vulnerabilite/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_vulnerabilite_create;
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\VulnerabiliteController::createAction',  '_route' => 'admin_vulnerabilite_create',);
                }
                not_admin_vulnerabilite_create:

                // admin_vulnerabilite_edit
                if (preg_match('#^/admin/vulnerabilite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vulnerabilite_edit')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\VulnerabiliteController::editAction',));
                }

                // admin_vulnerabilite_update
                if (preg_match('#^/admin/vulnerabilite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_vulnerabilite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vulnerabilite_update')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\VulnerabiliteController::updateAction',));
                }
                not_admin_vulnerabilite_update:

                // admin_vulnerabilite_delete
                if (preg_match('#^/admin/vulnerabilite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_vulnerabilite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vulnerabilite_delete')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\VulnerabiliteController::deleteAction',));
                }
                not_admin_vulnerabilite_delete:

            }

            if (0 === strpos($pathinfo, '/admin/alerte')) {
                // admin_alerte
                if (rtrim($pathinfo, '/') === '/admin/alerte') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_alerte');
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AlerteController::indexAction',  '_route' => 'admin_alerte',);
                }

                // admin_alerte_show
                if (preg_match('#^/admin/alerte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alerte_show')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AlerteController::showAction',));
                }

                // admin_alerte_new
                if ($pathinfo === '/admin/alerte/new') {
                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AlerteController::newAction',  '_route' => 'admin_alerte_new',);
                }

                // admin_alerte_create
                if ($pathinfo === '/admin/alerte/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_alerte_create;
                    }

                    return array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AlerteController::createAction',  '_route' => 'admin_alerte_create',);
                }
                not_admin_alerte_create:

                // admin_alerte_edit
                if (preg_match('#^/admin/alerte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alerte_edit')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AlerteController::editAction',));
                }

                // admin_alerte_update
                if (preg_match('#^/admin/alerte/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_alerte_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alerte_update')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AlerteController::updateAction',));
                }
                not_admin_alerte_update:

                // admin_alerte_delete
                if (preg_match('#^/admin/alerte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_alerte_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alerte_delete')), array (  '_controller' => 'Cert\\IncidentBundle\\Controller\\AlerteController::deleteAction',));
                }
                not_admin_alerte_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
