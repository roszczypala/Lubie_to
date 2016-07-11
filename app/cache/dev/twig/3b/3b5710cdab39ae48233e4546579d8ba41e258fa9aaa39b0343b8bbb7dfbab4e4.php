<?php

/* ::base_main.html.twig */
class __TwigTemplate_44e72140b547d29d2bf1dba7415fa73335e07a1c74d5c7d9c0199bf563ed2e0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'middle' => array($this, 'block_middle'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e322b7aef97b1b8650a61dbe2dfb1c5167b5f1b158a0ccedfd519fea3d5dda52 = $this->env->getExtension("native_profiler");
        $__internal_e322b7aef97b1b8650a61dbe2dfb1c5167b5f1b158a0ccedfd519fea3d5dda52->enter($__internal_e322b7aef97b1b8650a61dbe2dfb1c5167b5f1b158a0ccedfd519fea3d5dda52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_main.html.twig"));

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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "::base_main.html.twig", 15)->display($context);
        // line 16
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 31
        echo "        <div class=\"container text-center center-block\">
            <div class=\"jumbotron text-center\">
                ";
        // line 33
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 35
        echo "            </div>
            <div class=\"row\">
                ";
        // line 37
        $this->displayBlock('middle', $context, $blocks);
        // line 38
        echo "  
            </div>               
        </div> 
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </body>
</html>
";
        
        $__internal_e322b7aef97b1b8650a61dbe2dfb1c5167b5f1b158a0ccedfd519fea3d5dda52->leave($__internal_e322b7aef97b1b8650a61dbe2dfb1c5167b5f1b158a0ccedfd519fea3d5dda52_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4ed70937cb4c6fa285fc6c873194753402f62ec860f497394f1fd555b3911f7 = $this->env->getExtension("native_profiler");
        $__internal_e4ed70937cb4c6fa285fc6c873194753402f62ec860f497394f1fd555b3911f7->enter($__internal_e4ed70937cb4c6fa285fc6c873194753402f62ec860f497394f1fd555b3911f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e4ed70937cb4c6fa285fc6c873194753402f62ec860f497394f1fd555b3911f7->leave($__internal_e4ed70937cb4c6fa285fc6c873194753402f62ec860f497394f1fd555b3911f7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00cb512626becd3f836dc842e7fe04c5743c5f18c2edcd1e01cb0c7b83dcf8d2 = $this->env->getExtension("native_profiler");
        $__internal_00cb512626becd3f836dc842e7fe04c5743c5f18c2edcd1e01cb0c7b83dcf8d2->enter($__internal_00cb512626becd3f836dc842e7fe04c5743c5f18c2edcd1e01cb0c7b83dcf8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
        ";
        
        $__internal_00cb512626becd3f836dc842e7fe04c5743c5f18c2edcd1e01cb0c7b83dcf8d2->leave($__internal_00cb512626becd3f836dc842e7fe04c5743c5f18c2edcd1e01cb0c7b83dcf8d2_prof);

    }

    // line 16
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2cbe7909739ac9b8d9c109be643d1abe1ac6024575bd54a569bbcef8d35b57ff = $this->env->getExtension("native_profiler");
        $__internal_2cbe7909739ac9b8d9c109be643d1abe1ac6024575bd54a569bbcef8d35b57ff->enter($__internal_2cbe7909739ac9b8d9c109be643d1abe1ac6024575bd54a569bbcef8d35b57ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 17
        echo "         <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
              <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"/index\">JoinUs</a>
              </div>
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"/index\">Home</a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"/logout\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
              </ul>
            </div>
          </nav>
        ";
        
        $__internal_2cbe7909739ac9b8d9c109be643d1abe1ac6024575bd54a569bbcef8d35b57ff->leave($__internal_2cbe7909739ac9b8d9c109be643d1abe1ac6024575bd54a569bbcef8d35b57ff_prof);

    }

    // line 33
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_6ac7b779e39b2366bc237cbb5c12ac34589617f8e3119210b680cb1c57028dcf = $this->env->getExtension("native_profiler");
        $__internal_6ac7b779e39b2366bc237cbb5c12ac34589617f8e3119210b680cb1c57028dcf->enter($__internal_6ac7b779e39b2366bc237cbb5c12ac34589617f8e3119210b680cb1c57028dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 34
        echo "                ";
        
        $__internal_6ac7b779e39b2366bc237cbb5c12ac34589617f8e3119210b680cb1c57028dcf->leave($__internal_6ac7b779e39b2366bc237cbb5c12ac34589617f8e3119210b680cb1c57028dcf_prof);

    }

    // line 37
    public function block_middle($context, array $blocks = array())
    {
        $__internal_74e76c8547a0b3296e7f541a5bcfbcde738fa76cfca83bfbb0baa19b21191470 = $this->env->getExtension("native_profiler");
        $__internal_74e76c8547a0b3296e7f541a5bcfbcde738fa76cfca83bfbb0baa19b21191470->enter($__internal_74e76c8547a0b3296e7f541a5bcfbcde738fa76cfca83bfbb0baa19b21191470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 38
        echo "                ";
        
        $__internal_74e76c8547a0b3296e7f541a5bcfbcde738fa76cfca83bfbb0baa19b21191470->leave($__internal_74e76c8547a0b3296e7f541a5bcfbcde738fa76cfca83bfbb0baa19b21191470_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea21cffbfb43df7cda6f3d0449c306dfcafdc4dc447795cc6e20361a5fdfc150 = $this->env->getExtension("native_profiler");
        $__internal_ea21cffbfb43df7cda6f3d0449c306dfcafdc4dc447795cc6e20361a5fdfc150->enter($__internal_ea21cffbfb43df7cda6f3d0449c306dfcafdc4dc447795cc6e20361a5fdfc150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_ea21cffbfb43df7cda6f3d0449c306dfcafdc4dc447795cc6e20361a5fdfc150->leave($__internal_ea21cffbfb43df7cda6f3d0449c306dfcafdc4dc447795cc6e20361a5fdfc150_prof);

    }

    public function getTemplateName()
    {
        return "::base_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 41,  159 => 38,  153 => 37,  146 => 34,  140 => 33,  120 => 17,  114 => 16,  104 => 9,  99 => 8,  93 => 7,  81 => 6,  72 => 42,  70 => 41,  65 => 38,  63 => 37,  59 => 35,  57 => 33,  53 => 31,  50 => 16,  48 => 15,  41 => 12,  39 => 7,  35 => 6,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {%include "FOSUserBundle::layout.html.twig"%}*/
/*         {% block navbar %}*/
/*          <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container-fluid">*/
/*               <div class="navbar-header">*/
/*                 <a class="navbar-brand" href="/index">JoinUs</a>*/
/*               </div>*/
/*               <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="/index">Home</a></li>*/
/*               </ul>*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </nav>*/
/*         {% endblock %}*/
/*         <div class="container text-center center-block">*/
/*             <div class="jumbotron text-center">*/
/*                 {% block jumbotron %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% block middle %}*/
/*                 {% endblock %}  */
/*             </div>               */
/*         </div> */
/*         {% block javascripts %}<script src="{{ asset('js/bootstrap.js') }}"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
