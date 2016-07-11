<?php

/* AppBundle:User:deleteCrew.html.twig */
class __TwigTemplate_4c2ee7a2c99d8474c579e74f493ceadefafef6cb5427df7296db9202ffbefe0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:deleteCrew.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'middle' => array($this, 'block_middle'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47dc16832869be5ccd79a7f736700bcffba3f99a4b2eeb3c3fb377f59e68308a = $this->env->getExtension("native_profiler");
        $__internal_47dc16832869be5ccd79a7f736700bcffba3f99a4b2eeb3c3fb377f59e68308a->enter($__internal_47dc16832869be5ccd79a7f736700bcffba3f99a4b2eeb3c3fb377f59e68308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:deleteCrew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47dc16832869be5ccd79a7f736700bcffba3f99a4b2eeb3c3fb377f59e68308a->leave($__internal_47dc16832869be5ccd79a7f736700bcffba3f99a4b2eeb3c3fb377f59e68308a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fcb6ef70b7321b5df230bf525bcab0ec1b995641a58f32b4c21768b975acfe4 = $this->env->getExtension("native_profiler");
        $__internal_5fcb6ef70b7321b5df230bf525bcab0ec1b995641a58f32b4c21768b975acfe4->enter($__internal_5fcb6ef70b7321b5df230bf525bcab0ec1b995641a58f32b4c21768b975acfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin panel";
        
        $__internal_5fcb6ef70b7321b5df230bf525bcab0ec1b995641a58f32b4c21768b975acfe4->leave($__internal_5fcb6ef70b7321b5df230bf525bcab0ec1b995641a58f32b4c21768b975acfe4_prof);

    }

    // line 5
    public function block_middle($context, array $blocks = array())
    {
        $__internal_cbfd86a3da7a6c6eb10e9dc31a65f2dd3a0e9bd6ea44424c6d2c1a046aeecc7d = $this->env->getExtension("native_profiler");
        $__internal_cbfd86a3da7a6c6eb10e9dc31a65f2dd3a0e9bd6ea44424c6d2c1a046aeecc7d->enter($__internal_cbfd86a3da7a6c6eb10e9dc31a65f2dd3a0e9bd6ea44424c6d2c1a046aeecc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 6
        echo "    <h1>Group deleted</h1>
    <h3><a class=\"btn btn-success btn-block\" href=\"/admin/crews\">Back</a></h3>
";
        
        $__internal_cbfd86a3da7a6c6eb10e9dc31a65f2dd3a0e9bd6ea44424c6d2c1a046aeecc7d->leave($__internal_cbfd86a3da7a6c6eb10e9dc31a65f2dd3a0e9bd6ea44424c6d2c1a046aeecc7d_prof);

    }

    // line 9
    public function block_right($context, array $blocks = array())
    {
        $__internal_ac213b4dd3d125fc1fc13a0d95a1e178fbcf43f2028b065d6ccb6387acb9a936 = $this->env->getExtension("native_profiler");
        $__internal_ac213b4dd3d125fc1fc13a0d95a1e178fbcf43f2028b065d6ccb6387acb9a936->enter($__internal_ac213b4dd3d125fc1fc13a0d95a1e178fbcf43f2028b065d6ccb6387acb9a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 10
        echo "    <div class=\"btn-group-vertical\">
        <a class=\"btn btn-success\" href=\"/index\">User page</a>
        <a class=\"btn btn-success\" href=\"/admin/index\">Main</a>
        <a class=\"btn btn-success\" href=\"/admin/crews\">All active groups</a>
        <a class=\"btn btn-success\" href=\"/admin/events\">All active events</a>
        <a class=\"btn btn-success\" href=\"/admin/users\">All users</a>
    </div>
";
        
        $__internal_ac213b4dd3d125fc1fc13a0d95a1e178fbcf43f2028b065d6ccb6387acb9a936->leave($__internal_ac213b4dd3d125fc1fc13a0d95a1e178fbcf43f2028b065d6ccb6387acb9a936_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:deleteCrew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  63 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Admin panel{% endblock %}*/
/* */
/* {% block middle %}*/
/*     <h1>Group deleted</h1>*/
/*     <h3><a class="btn btn-success btn-block" href="/admin/crews">Back</a></h3>*/
/* {% endblock %}*/
/* {% block right %}*/
/*     <div class="btn-group-vertical">*/
/*         <a class="btn btn-success" href="/index">User page</a>*/
/*         <a class="btn btn-success" href="/admin/index">Main</a>*/
/*         <a class="btn btn-success" href="/admin/crews">All active groups</a>*/
/*         <a class="btn btn-success" href="/admin/events">All active events</a>*/
/*         <a class="btn btn-success" href="/admin/users">All users</a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
