<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig */
class __TwigTemplate_ca01b9801a096f7333e8ff590684c9b95b4abd2006bd56bed8e191631660886c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig"));

        // line 11
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "children", [])), "children", []));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 15
            echo "                ";
            if (($context["field_name"] == "_delete")) {
                // line 16
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 18
                echo "                    <th
                        ";
                // line 19
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "required", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "required", [], "array"), false)) : (false))) {
                    // line 20
                    echo "                            class=\"required\"
                        ";
                }
                // line 22
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array"), false)) : (false))) {
                    // line 23
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 25
                echo "                    >
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", []), "label", []), [], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "sonata_admin", [], "array", false, true), "admin", [], "any", false, true), "translationDomain", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "sonata_admin", [], "array", false, true), "admin", [], "any", false, true), "translationDomain", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 27
$context["nested_field"], "vars", []), "translation_domain", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", []), "translation_domain", [])))), "html", null, true);
                // line 28
                echo "
                    </th>
                ";
            }
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "children", []));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 36
            echo "            <tr>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "children", []));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 38
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        control-group
                        ";
                // line 41
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "errors", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "errors", []), false)) : (false))) {
                    echo " error sonata-ba-field-error";
                }
                // line 42
                echo "                        \"
                        ";
                // line 43
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array"), false)) : (false))) {
                    // line 44
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 46
                echo "                    >
                        ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true), "associationadmin", [], "any", false, true), "formfielddescriptions", [], "any", false, true), $context["field_name"], [], "array", true, true)) {
                    // line 48
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 50
                    $context["dummy"] = twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "setrendered", []);
                    // line 51
                    echo "                        ";
                } else {
                    // line 52
                    echo "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 53
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget', ["label" => false]);
                        echo "
                            ";
                    } else {
                        // line 55
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 57
                    echo "                        ";
                }
                // line 58
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "errors", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, true), "errors", []), false)) : (false))) {
                    // line 59
                    echo "                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 60
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 63
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 67,  184 => 65,  177 => 63,  171 => 60,  168 => 59,  165 => 58,  162 => 57,  156 => 55,  150 => 53,  147 => 52,  144 => 51,  142 => 50,  136 => 48,  134 => 47,  131 => 46,  127 => 44,  125 => 43,  122 => 42,  118 => 41,  111 => 39,  108 => 38,  104 => 37,  101 => 36,  97 => 35,  92 => 32,  86 => 31,  81 => 28,  79 => 27,  78 => 26,  75 => 25,  71 => 23,  68 => 22,  64 => 20,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  46 => 14,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<table class=\"table table-bordered\">
    <thead>
        <tr>
            {% for field_name, nested_field in form.children|first.children %}
                {% if field_name == '_delete' %}
                    <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                {% else %}
                    <th
                        {% if nested_field.vars['required']|default(false) %}
                            class=\"required\"
                        {% endif %}
                        {% if nested_field.vars['attr']['hidden']|default(false) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {{ nested_field.vars.label|trans({}, nested_field.vars['sonata_admin'].admin.translationDomain
                            |default(nested_field.vars.translation_domain)
                        ) }}
                    </th>
                {% endif %}
            {% endfor %}
        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        {% for nested_group_field_name, nested_group_field in form.children %}
            <tr>
                {% for field_name, nested_field in nested_group_field.children %}
                    <td class=\"
                        sonata-ba-td-{{ id }}-{{ field_name  }}
                        control-group
                        {% if nested_field.vars.errors|default(false) %} error sonata-ba-field-error{% endif %}
                        \"
                        {% if nested_field.vars['attr']['hidden']|default(false) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if sonata_admin.field_description.associationadmin.formfielddescriptions[field_name] is defined %}
                            {{ form_widget(nested_field) }}

                            {% set dummy = nested_group_field.setrendered %}
                        {% else %}
                            {% if field_name == '_delete' %}
                                {{ form_widget(nested_field, { label: false }) }}
                            {% else %}
                                {{ form_widget(nested_field) }}
                            {% endif %}
                        {% endif %}
                        {% if nested_field.vars.errors|default(false) %}
                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                {{ form_errors(nested_field) }}
                            </div>
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig", "C:\\symfony\\htdocs\\guestbook\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\Association\\edit_one_to_many_inline_table.html.twig");
    }
}
