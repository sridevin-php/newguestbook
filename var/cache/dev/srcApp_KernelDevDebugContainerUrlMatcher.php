<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/guest/book' => [[['_route' => 'guest_book', '_controller' => 'App\\Controller\\GuestBookController::index'], null, null, null, false, false, null]],
            '/guest' => [[['_route' => 'guest_index', '_controller' => 'App\\Controller\\GuestController::index'], null, ['GET' => 0], null, true, false, null]],
            '/guest/new' => [[['_route' => 'guest_new', '_controller' => 'App\\Controller\\GuestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/login_check' => [[['_route' => 'login_check', '_controller' => 'App\\Controller\\SecurityController::login_check'], null, null, null, false, false, null]],
            '/admin' => [
                [['_route' => 'app_security_admin', '_controller' => 'App\\Controller\\SecurityController::admin'], null, null, null, false, false, null],
                [['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], null, null, null, true, false, null],
            ],
            '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
            '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
            '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
            '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
            '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
            '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
            '/admin/app/guest/list' => [[['_route' => 'admin_app_guest_list', '_controller' => 'App\\Controller\\GuestAdminController::listAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_list'], null, null, null, false, false, null]],
            '/admin/app/guest/create' => [[['_route' => 'admin_app_guest_create', '_controller' => 'App\\Controller\\GuestAdminController::createAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_create'], null, null, null, false, false, null]],
            '/admin/app/guest/batch' => [[['_route' => 'admin_app_guest_batch', '_controller' => 'App\\Controller\\GuestAdminController::batchAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_batch'], null, null, null, false, false, null]],
            '/admin/app/guest/export' => [[['_route' => 'admin_app_guest_export', '_controller' => 'App\\Controller\\GuestAdminController::exportAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_export'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/guest/([^/]++)(?'
                        .'|(*:187)'
                        .'|/edit(*:200)'
                        .'|(*:208)'
                    .')'
                    .'|/admin/(?'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:281)'
                        .'|app/guest/([^/]++)/(?'
                            .'|edit(*:315)'
                            .'|delete(*:329)'
                            .'|show(*:341)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            187 => [[['_route' => 'guest_show', '_controller' => 'App\\Controller\\GuestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            200 => [[['_route' => 'guest_edit', '_controller' => 'App\\Controller\\GuestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            208 => [[['_route' => 'guest_delete', '_controller' => 'App\\Controller\\GuestController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            281 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
            315 => [[['_route' => 'admin_app_guest_edit', '_controller' => 'App\\Controller\\GuestAdminController::editAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_edit'], ['id'], null, null, false, false, null]],
            329 => [[['_route' => 'admin_app_guest_delete', '_controller' => 'App\\Controller\\GuestAdminController::deleteAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_delete'], ['id'], null, null, false, false, null]],
            341 => [[['_route' => 'admin_app_guest_show', '_controller' => 'App\\Controller\\GuestAdminController::showAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_show'], ['id'], null, null, false, false, null]],
        ];
    }
}
