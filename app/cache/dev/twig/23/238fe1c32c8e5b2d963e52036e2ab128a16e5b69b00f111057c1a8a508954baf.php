<?php

/* ::base.html.twig */
class __TwigTemplate_5c66e8e30525fdd1e389cefefe4b26182f8dd1c29cf1adcdf96e3c005c29c13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'top' => array($this, 'block_top'),
            'middle' => array($this, 'block_middle'),
            'middle1' => array($this, 'block_middle1'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2488c561c2deb051f98c0442e2c4d8ec837b6cb11d6443ce825d90763d156c0 = $this->env->getExtension("native_profiler");
        $__internal_b2488c561c2deb051f98c0442e2c4d8ec837b6cb11d6443ce825d90763d156c0->enter($__internal_b2488c561c2deb051f98c0442e2c4d8ec837b6cb11d6443ce825d90763d156c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "::base.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 38
        echo "        <div class=\"container\">
            <div class=\"row text-left left page-top\">
                <div class=\"col-md-1\">
                </div>
                ";
        // line 42
        $this->displayBlock('top', $context, $blocks);
        // line 44
        echo "                <div class=\"col-md-1\">
                </div>
            </div>
            <hr>
            <div class=\"row text-center\">
                <div class=\"col-md-1\"> 
                </div>
                <div class=\"col-md-10\">
                        ";
        // line 52
        $this->displayBlock('middle', $context, $blocks);
        // line 53
        echo "   
                </div> 
                <div class=\"col-md-1\">
                </div>    
            </div> 
            <div class=\"row text-center\">
                <div class=\"col-md-1\">
                </div>
                <div class=\"col-md-10\">
                        ";
        // line 62
        $this->displayBlock('middle1', $context, $blocks);
        // line 63
        echo "   
                </div> 
                <div class=\"col-md-1\">
                </div>    
            </div>    
        </div> 
        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
</html>";
        
        $__internal_b2488c561c2deb051f98c0442e2c4d8ec837b6cb11d6443ce825d90763d156c0->leave($__internal_b2488c561c2deb051f98c0442e2c4d8ec837b6cb11d6443ce825d90763d156c0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3da0e5834a405b1917f3cbbf371464b9b5fc42b429d6066b0d4cba96964d37e8 = $this->env->getExtension("native_profiler");
        $__internal_3da0e5834a405b1917f3cbbf371464b9b5fc42b429d6066b0d4cba96964d37e8->enter($__internal_3da0e5834a405b1917f3cbbf371464b9b5fc42b429d6066b0d4cba96964d37e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Join Us";
        
        $__internal_3da0e5834a405b1917f3cbbf371464b9b5fc42b429d6066b0d4cba96964d37e8->leave($__internal_3da0e5834a405b1917f3cbbf371464b9b5fc42b429d6066b0d4cba96964d37e8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e071dc68ced5d618c557e0a52daf926213a379c9b2663ed7091bb325428341d = $this->env->getExtension("native_profiler");
        $__internal_6e071dc68ced5d618c557e0a52daf926213a379c9b2663ed7091bb325428341d->enter($__internal_6e071dc68ced5d618c557e0a52daf926213a379c9b2663ed7091bb325428341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.4.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(document).ready(function(){
                    \$('[data-toggle=\"tooltip\"]').tooltip();
                });
            </script>
        ";
        
        $__internal_6e071dc68ced5d618c557e0a52daf926213a379c9b2663ed7091bb325428341d->leave($__internal_6e071dc68ced5d618c557e0a52daf926213a379c9b2663ed7091bb325428341d_prof);

    }

    // line 22
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_e2c57891db0f4240c39f5b88565d2a85054660904a8ab68a7ff1e7625dfa85b7 = $this->env->getExtension("native_profiler");
        $__internal_e2c57891db0f4240c39f5b88565d2a85054660904a8ab68a7ff1e7625dfa85b7->enter($__internal_e2c57891db0f4240c39f5b88565d2a85054660904a8ab68a7ff1e7625dfa85b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 23
        echo "         <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
              <div class=\"navbar-header\">
                  <a class=\"navbar-brand\" href=\"/index\">JoinUs</a>
              </div>
              <ul class=\"nav navbar-nav\">
                <li><a href=\"/index\">Home</a></li>
                <li><a href=\"/crew\">All groups</a></li>
              </ul>      
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"/logout\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
              </ul>
            </div>
          </nav>
        ";
        
        $__internal_e2c57891db0f4240c39f5b88565d2a85054660904a8ab68a7ff1e7625dfa85b7->leave($__internal_e2c57891db0f4240c39f5b88565d2a85054660904a8ab68a7ff1e7625dfa85b7_prof);

    }

    // line 42
    public function block_top($context, array $blocks = array())
    {
        $__internal_2bcbb0fe980c1185f95f4ddf1e891c4f9a791dd95915826be3e3ab7190c61d02 = $this->env->getExtension("native_profiler");
        $__internal_2bcbb0fe980c1185f95f4ddf1e891c4f9a791dd95915826be3e3ab7190c61d02->enter($__internal_2bcbb0fe980c1185f95f4ddf1e891c4f9a791dd95915826be3e3ab7190c61d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 43
        echo "                ";
        
        $__internal_2bcbb0fe980c1185f95f4ddf1e891c4f9a791dd95915826be3e3ab7190c61d02->leave($__internal_2bcbb0fe980c1185f95f4ddf1e891c4f9a791dd95915826be3e3ab7190c61d02_prof);

    }

    // line 52
    public function block_middle($context, array $blocks = array())
    {
        $__internal_ddb40806f0db2eb6b45af10e44a3add9b6be0203d3738c048d3bfa7fa581a39e = $this->env->getExtension("native_profiler");
        $__internal_ddb40806f0db2eb6b45af10e44a3add9b6be0203d3738c048d3bfa7fa581a39e->enter($__internal_ddb40806f0db2eb6b45af10e44a3add9b6be0203d3738c048d3bfa7fa581a39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 53
        echo "                        ";
        
        $__internal_ddb40806f0db2eb6b45af10e44a3add9b6be0203d3738c048d3bfa7fa581a39e->leave($__internal_ddb40806f0db2eb6b45af10e44a3add9b6be0203d3738c048d3bfa7fa581a39e_prof);

    }

    // line 62
    public function block_middle1($context, array $blocks = array())
    {
        $__internal_48822dde12513cef0ffa8b5ebb5508a6d5bb5b738e5aa46ef16e25d1ffd15c24 = $this->env->getExtension("native_profiler");
        $__internal_48822dde12513cef0ffa8b5ebb5508a6d5bb5b738e5aa46ef16e25d1ffd15c24->enter($__internal_48822dde12513cef0ffa8b5ebb5508a6d5bb5b738e5aa46ef16e25d1ffd15c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle1"));

        // line 63
        echo "                        ";
        
        $__internal_48822dde12513cef0ffa8b5ebb5508a6d5bb5b738e5aa46ef16e25d1ffd15c24->leave($__internal_48822dde12513cef0ffa8b5ebb5508a6d5bb5b738e5aa46ef16e25d1ffd15c24_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a801520a7107dd4e0a1935149cc949ccc76b8c5f177e3dbba15697386422027 = $this->env->getExtension("native_profiler");
        $__internal_1a801520a7107dd4e0a1935149cc949ccc76b8c5f177e3dbba15697386422027->enter($__internal_1a801520a7107dd4e0a1935149cc949ccc76b8c5f177e3dbba15697386422027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_1a801520a7107dd4e0a1935149cc949ccc76b8c5f177e3dbba15697386422027->leave($__internal_1a801520a7107dd4e0a1935149cc949ccc76b8c5f177e3dbba15697386422027_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 69,  206 => 63,  200 => 62,  193 => 53,  187 => 52,  180 => 43,  174 => 42,  153 => 23,  147 => 22,  133 => 11,  128 => 9,  123 => 8,  117 => 7,  105 => 6,  97 => 70,  95 => 69,  87 => 63,  85 => 62,  74 => 53,  72 => 52,  62 => 44,  60 => 42,  54 => 38,  51 => 22,  49 => 21,  42 => 18,  40 => 7,  36 => 6,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Join Us{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*             <script src="{{asset('js/jquery-2.2.4.js')}}"></script>*/
/*             <script>*/
/*                 $(document).ready(function(){*/
/*                     $('[data-toggle="tooltip"]').tooltip();*/
/*                 });*/
/*             </script>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {%include "FOSUserBundle::layout.html.twig"%}*/
/*         {% block navbar %}*/
/*          <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container-fluid">*/
/*               <div class="navbar-header">*/
/*                   <a class="navbar-brand" href="/index">JoinUs</a>*/
/*               </div>*/
/*               <ul class="nav navbar-nav">*/
/*                 <li><a href="/index">Home</a></li>*/
/*                 <li><a href="/crew">All groups</a></li>*/
/*               </ul>      */
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </nav>*/
/*         {% endblock %}*/
/*         <div class="container">*/
/*             <div class="row text-left left page-top">*/
/*                 <div class="col-md-1">*/
/*                 </div>*/
/*                 {% block top %}*/
/*                 {% endblock %}*/
/*                 <div class="col-md-1">*/
/*                 </div>*/
/*             </div>*/
/*             <hr>*/
/*             <div class="row text-center">*/
/*                 <div class="col-md-1"> */
/*                 </div>*/
/*                 <div class="col-md-10">*/
/*                         {% block middle %}*/
/*                         {% endblock %}   */
/*                 </div> */
/*                 <div class="col-md-1">*/
/*                 </div>    */
/*             </div> */
/*             <div class="row text-center">*/
/*                 <div class="col-md-1">*/
/*                 </div>*/
/*                 <div class="col-md-10">*/
/*                         {% block middle1 %}*/
/*                         {% endblock %}   */
/*                 </div> */
/*                 <div class="col-md-1">*/
/*                 </div>    */
/*             </div>    */
/*         </div> */
/*         {% block javascripts %}<script src="{{ asset('js/bootstrap.js') }}"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
