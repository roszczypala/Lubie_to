<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_73fa538891337bbce871078953f189ea48334c3b7c57c60bdc02db383e82e3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'top' => array($this, 'block_top'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0adef6a36075969509a4b272aa22afb0179274d8593a061625fbeef0e5319433 = $this->env->getExtension("native_profiler");
        $__internal_0adef6a36075969509a4b272aa22afb0179274d8593a061625fbeef0e5319433->enter($__internal_0adef6a36075969509a4b272aa22afb0179274d8593a061625fbeef0e5319433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0adef6a36075969509a4b272aa22afb0179274d8593a061625fbeef0e5319433->leave($__internal_0adef6a36075969509a4b272aa22afb0179274d8593a061625fbeef0e5319433_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_922a4ec605e934b49d58a6463a97375de400f3129ee2e97312407db29f7ffad5 = $this->env->getExtension("native_profiler");
        $__internal_922a4ec605e934b49d58a6463a97375de400f3129ee2e97312407db29f7ffad5->enter($__internal_922a4ec605e934b49d58a6463a97375de400f3129ee2e97312407db29f7ffad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
       <div class=\"container-fluid\">
         <div class=\"navbar-header\">
           <a class=\"navbar-brand\" href=\"/\">JoinUs</a>
         </div>
         <ul class=\"nav navbar-nav navbar-right\">
           <li><a href=\"/register\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
         </ul>
       </div>
    </nav>
";
        
        $__internal_922a4ec605e934b49d58a6463a97375de400f3129ee2e97312407db29f7ffad5->leave($__internal_922a4ec605e934b49d58a6463a97375de400f3129ee2e97312407db29f7ffad5_prof);

    }

    // line 18
    public function block_top($context, array $blocks = array())
    {
        $__internal_42a00a2e8f51403f199735f9837f3cb9078ddd6f3d952aadf8395d8488649844 = $this->env->getExtension("native_profiler");
        $__internal_42a00a2e8f51403f199735f9837f3cb9078ddd6f3d952aadf8395d8488649844->enter($__internal_42a00a2e8f51403f199735f9837f3cb9078ddd6f3d952aadf8395d8488649844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 19
        echo "    <h2 class=\"text-center\">Log in to continue</h2>             
";
        
        $__internal_42a00a2e8f51403f199735f9837f3cb9078ddd6f3d952aadf8395d8488649844->leave($__internal_42a00a2e8f51403f199735f9837f3cb9078ddd6f3d952aadf8395d8488649844_prof);

    }

    // line 22
    public function block_middle($context, array $blocks = array())
    {
        $__internal_164499e843669ef3a72d646a89365f32bd51ba7b6842c63eb912e18dd13f497b = $this->env->getExtension("native_profiler");
        $__internal_164499e843669ef3a72d646a89365f32bd51ba7b6842c63eb912e18dd13f497b->enter($__internal_164499e843669ef3a72d646a89365f32bd51ba7b6842c63eb912e18dd13f497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 26
        echo "
<div class=\"col-md-2\"></div>
<div class=\"col-md-8\">
    <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            <label for=\"username\">Username: </label>
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </div>

        <div class=\"form-group\">
        <label for=\"password\">Password: </label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        </div>

        <div class=\"form-group\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>

        <input class=\"btn btn-custom\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
</div>
<div class=\"col-md-2\"></div>        
";
        
        $__internal_164499e843669ef3a72d646a89365f32bd51ba7b6842c63eb912e18dd13f497b->leave($__internal_164499e843669ef3a72d646a89365f32bd51ba7b6842c63eb912e18dd13f497b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  116 => 44,  103 => 34,  96 => 30,  92 => 29,  87 => 26,  81 => 24,  79 => 23,  73 => 22,  65 => 19,  59 => 18,  42 => 6,  36 => 5,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block navbar %}*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*        <div class="container-fluid">*/
/*          <div class="navbar-header">*/
/*            <a class="navbar-brand" href="/">JoinUs</a>*/
/*          </div>*/
/*          <ul class="nav navbar-nav navbar-right">*/
/*            <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>*/
/*          </ul>*/
/*        </div>*/
/*     </nav>*/
/* {% endblock %}*/
/* */
/* {% block top %}*/
/*     <h2 class="text-center">Log in to continue</h2>             */
/* {% endblock %}*/
/* */
/* {% block middle %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="col-md-2"></div>*/
/* <div class="col-md-8">*/
/*     <form action="{{ path("fos_user_security_check") }}" method="post" role="form">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <div class="form-group">*/
/*             <label for="username">Username: </label>*/
/*             <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*         <label for="password">Password: </label>*/
/*         <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*         </div>*/
/* */
/*         <input class="btn btn-custom" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*     </form>*/
/* </div>*/
/* <div class="col-md-2"></div>        */
/* {% endblock middle %}*/
/* */
