<?php

/* AppBundle:User:accepted.html.twig */
class __TwigTemplate_d1bd26e57cfc7133e31ee7f90ec9f678955380378ca314c873aa5cc8b674f013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:accepted.html.twig", 1);
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
        $__internal_e358077ab10cc4a5d09df631c073e864fb3e02839cc7ed68cb695240d039bbfe = $this->env->getExtension("native_profiler");
        $__internal_e358077ab10cc4a5d09df631c073e864fb3e02839cc7ed68cb695240d039bbfe->enter($__internal_e358077ab10cc4a5d09df631c073e864fb3e02839cc7ed68cb695240d039bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:accepted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e358077ab10cc4a5d09df631c073e864fb3e02839cc7ed68cb695240d039bbfe->leave($__internal_e358077ab10cc4a5d09df631c073e864fb3e02839cc7ed68cb695240d039bbfe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e9f12127a221214a5c0af399aa4324630f2bfc23bdbb4e998d450b630a188f7 = $this->env->getExtension("native_profiler");
        $__internal_8e9f12127a221214a5c0af399aa4324630f2bfc23bdbb4e998d450b630a188f7->enter($__internal_8e9f12127a221214a5c0af399aa4324630f2bfc23bdbb4e998d450b630a188f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin panel";
        
        $__internal_8e9f12127a221214a5c0af399aa4324630f2bfc23bdbb4e998d450b630a188f7->leave($__internal_8e9f12127a221214a5c0af399aa4324630f2bfc23bdbb4e998d450b630a188f7_prof);

    }

    // line 5
    public function block_middle($context, array $blocks = array())
    {
        $__internal_ad8cbbe14aadf4053abd64989efd88bae6b90499b2d20096165b31588babfabe = $this->env->getExtension("native_profiler");
        $__internal_ad8cbbe14aadf4053abd64989efd88bae6b90499b2d20096165b31588babfabe->enter($__internal_ad8cbbe14aadf4053abd64989efd88bae6b90499b2d20096165b31588babfabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 6
        echo "    <h1>Accepted</h1>
    <h3><a class=\"btn btn-success btn-block\" href=\"/admin/index\">Back</a></h3>
";
        
        $__internal_ad8cbbe14aadf4053abd64989efd88bae6b90499b2d20096165b31588babfabe->leave($__internal_ad8cbbe14aadf4053abd64989efd88bae6b90499b2d20096165b31588babfabe_prof);

    }

    // line 9
    public function block_right($context, array $blocks = array())
    {
        $__internal_8eac1073780ab74797507fb34c5482baebb6c1b8d87c2877dfc57f5e91db433d = $this->env->getExtension("native_profiler");
        $__internal_8eac1073780ab74797507fb34c5482baebb6c1b8d87c2877dfc57f5e91db433d->enter($__internal_8eac1073780ab74797507fb34c5482baebb6c1b8d87c2877dfc57f5e91db433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 10
        echo "    <div class=\"btn-group-vertical\">
        <a class=\"btn btn-success\" href=\"/index\">User page</a>
        <a class=\"btn btn-success\" href=\"/admin/index\">Main</a>
        <a class=\"btn btn-success\" href=\"/admin/crews\">All active groups</a>
        <a class=\"btn btn-success\" href=\"/admin/events\">All active events</a>
        <a class=\"btn btn-success\" href=\"/admin/users\">All users</a>
    </div>
";
        
        $__internal_8eac1073780ab74797507fb34c5482baebb6c1b8d87c2877dfc57f5e91db433d->leave($__internal_8eac1073780ab74797507fb34c5482baebb6c1b8d87c2877dfc57f5e91db433d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:accepted.html.twig";
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
/*     <h1>Accepted</h1>*/
/*     <h3><a class="btn btn-success btn-block" href="/admin/index">Back</a></h3>*/
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
