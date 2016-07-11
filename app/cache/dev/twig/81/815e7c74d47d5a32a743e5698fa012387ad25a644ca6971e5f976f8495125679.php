<?php

/* AppBundle:Event:edit.html.twig */
class __TwigTemplate_f0f86e3fa1ce98ee0d44273d16b6eca42e0a75cca283dde5140ee561596dd5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Event:edit.html.twig", 1);
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
        $__internal_6520811e7ec20105b1a4b9af03033a7e1644620bc2fa1c6b997b1683942e860e = $this->env->getExtension("native_profiler");
        $__internal_6520811e7ec20105b1a4b9af03033a7e1644620bc2fa1c6b997b1683942e860e->enter($__internal_6520811e7ec20105b1a4b9af03033a7e1644620bc2fa1c6b997b1683942e860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Event:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6520811e7ec20105b1a4b9af03033a7e1644620bc2fa1c6b997b1683942e860e->leave($__internal_6520811e7ec20105b1a4b9af03033a7e1644620bc2fa1c6b997b1683942e860e_prof);

    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        $__internal_1fe28dbf056fa7540e759c3fb6445e65913a57dc236098cd9666b66d64156a05 = $this->env->getExtension("native_profiler");
        $__internal_1fe28dbf056fa7540e759c3fb6445e65913a57dc236098cd9666b66d64156a05->enter($__internal_1fe28dbf056fa7540e759c3fb6445e65913a57dc236098cd9666b66d64156a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 4
        echo "<h1>Event edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <a class=\"btn btn-success btn-block\" href=\"/event/";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\">
        Back to event page
    </a>
";
        
        $__internal_1fe28dbf056fa7540e759c3fb6445e65913a57dc236098cd9666b66d64156a05->leave($__internal_1fe28dbf056fa7540e759c3fb6445e65913a57dc236098cd9666b66d64156a05_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Event:edit.html.twig";
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
/*     <h1>Event edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*     <a class="btn btn-success btn-block" href="/event/{{entity.id}}">*/
/*         Back to event page*/
/*     </a>*/
/* {% endblock %}*/
/* */
