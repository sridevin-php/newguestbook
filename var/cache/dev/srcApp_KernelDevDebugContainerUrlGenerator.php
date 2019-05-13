<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'guest_book' => [[], ['_controller' => 'App\\Controller\\GuestBookController::index'], [], [['text', '/guest/book']], [], []],
        'guest_index' => [[], ['_controller' => 'App\\Controller\\GuestController::index'], [], [['text', '/guest/']], [], []],
        'guest_new' => [[], ['_controller' => 'App\\Controller\\GuestController::new'], [], [['text', '/guest/new']], [], []],
        'guest_show' => [['id'], ['_controller' => 'App\\Controller\\GuestController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/guest']], [], []],
        'guest_edit' => [['id'], ['_controller' => 'App\\Controller\\GuestController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/guest']], [], []],
        'guest_delete' => [['id'], ['_controller' => 'App\\Controller\\GuestController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/guest']], [], []],
        'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'login_check' => [[], ['_controller' => 'App\\Controller\\SecurityController::login_check'], [], [['text', '/login_check']], [], []],
        'app_security_admin' => [[], ['_controller' => 'App\\Controller\\SecurityController::admin'], [], [['text', '/admin']], [], []],
        'sonata_admin_redirect' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], [], [['text', '/admin/']], [], []],
        'sonata_admin_dashboard' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], [], [['text', '/admin/dashboard']], [], []],
        'sonata_admin_retrieve_form_element' => [[], ['_controller' => 'sonata.admin.action.retrieve_form_field_element'], [], [['text', '/admin/core/get-form-field-element']], [], []],
        'sonata_admin_append_form_element' => [[], ['_controller' => 'sonata.admin.action.append_form_field_element'], [], [['text', '/admin/core/append-form-field-element']], [], []],
        'sonata_admin_short_object_information' => [['_format'], ['_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format' => 'html|json'], [['variable', '.', 'html|json', '_format', true], ['text', '/admin/core/get-short-object-description']], [], []],
        'sonata_admin_set_object_field_value' => [[], ['_controller' => 'sonata.admin.action.set_object_field_value'], [], [['text', '/admin/core/set-object-field-value']], [], []],
        'sonata_admin_search' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], [], [['text', '/admin/search']], [], []],
        'sonata_admin_retrieve_autocomplete_items' => [[], ['_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], [], [['text', '/admin/core/get-autocomplete-items']], [], []],
        'admin_app_guest_list' => [[], ['_controller' => 'App\\Controller\\GuestAdminController::listAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_list'], [], [['text', '/admin/app/guest/list']], [], []],
        'admin_app_guest_create' => [[], ['_controller' => 'App\\Controller\\GuestAdminController::createAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_create'], [], [['text', '/admin/app/guest/create']], [], []],
        'admin_app_guest_batch' => [[], ['_controller' => 'App\\Controller\\GuestAdminController::batchAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_batch'], [], [['text', '/admin/app/guest/batch']], [], []],
        'admin_app_guest_edit' => [['id'], ['_controller' => 'App\\Controller\\GuestAdminController::editAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/guest']], [], []],
        'admin_app_guest_delete' => [['id'], ['_controller' => 'App\\Controller\\GuestAdminController::deleteAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/guest']], [], []],
        'admin_app_guest_show' => [['id'], ['_controller' => 'App\\Controller\\GuestAdminController::showAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/app/guest']], [], []],
        'admin_app_guest_export' => [[], ['_controller' => 'App\\Controller\\GuestAdminController::exportAction', '_sonata_admin' => 'admin.guest', '_sonata_name' => 'admin_app_guest_export'], [], [['text', '/admin/app/guest/export']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
