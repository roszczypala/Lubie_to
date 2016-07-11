<?php

/* AppBundle:Crew:edit.html.twig */
class __TwigTemplate_5dda762e1a9e40420e42b6ba540a8d46416bd21966d4a7e5a385c7a09f8b3589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Crew:edit.html.twig", 1);
        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe904a47589035210bd9861e144d2a3bd4484804dab65cbfcaa7ab37e9222c70 = $this->env->getExtension("native_profiler");
        $__internal_fe904a47589035210bd9861e144d2a3bd4484804dab65cbfcaa7ab37e9222c70->enter($__internal_fe904a47589035210bd9861e144d2a3bd4484804dab65cbfcaa7ab37e9222c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Crew:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe904a47589035210bd9861e144d2a3bd4484804dab65cbfcaa7ab37e9222c70->leave($__internal_fe904a47589035210bd9861e144d2a3bd4484804dab65cbfcaa7ab37e9222c70_prof);

    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        $__internal_9a997fafaddae411ffd3c9a06e3f51dd82c8049f840a973c6ae477a3dc92f903 = $this->env->getExtension("native_profiler");
        $__internal_9a997fafaddae411ffd3c9a06e3f51dd82c8049f840a973c6ae477a3dc92f903->enter($__internal_9a997fafaddae411ffd3c9a06e3f51dd82c8049f840a973c6ae477a3dc92f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 4
        echo "<h1>Crew edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <a class=\"btn btn-success btn-block\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("crew");
        echo "\">
        Back to the list
    </a>
";
        
        $__internal_9a997fafaddae411ffd3c9a06e3f51dd82c8049f840a973c6ae477a3dc92f903->leave($__internal_9a997fafaddae411ffd3c9a06e3f51dd82c8049f840a973c6ae477a3dc92f903_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Crew:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block middle -%}*/
/*     <h1>Crew edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*     <a class="btn btn-success btn-block" href="{{ path('crew') }}">*/
/*         Back to the list*/
/*     </a>*/
/* {% endblock %}*/
/* */
