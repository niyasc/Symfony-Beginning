<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_94d34d6908de8091b0157ec0b92fa449740b0c868d608e3e35ed8303f73fe5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:secret.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_015b719022cfa047b965628f0e1e889c70076a8c11cdf7d1d5e550f0251b2678 = $this->env->getExtension("native_profiler");
        $__internal_015b719022cfa047b965628f0e1e889c70076a8c11cdf7d1d5e550f0251b2678->enter($__internal_015b719022cfa047b965628f0e1e889c70076a8c11cdf7d1d5e550f0251b2678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:secret.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015b719022cfa047b965628f0e1e889c70076a8c11cdf7d1d5e550f0251b2678->leave($__internal_015b719022cfa047b965628f0e1e889c70076a8c11cdf7d1d5e550f0251b2678_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec4639da53e9b525d4114498c7d955d961853608a775d02b21f6a6a0a8ad53aa = $this->env->getExtension("native_profiler");
        $__internal_ec4639da53e9b525d4114498c7d955d961853608a775d02b21f6a6a0a8ad53aa->enter($__internal_ec4639da53e9b525d4114498c7d955d961853608a775d02b21f6a6a0a8ad53aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure global Secret";
        
        $__internal_ec4639da53e9b525d4114498c7d955d961853608a775d02b21f6a6a0a8ad53aa->leave($__internal_ec4639da53e9b525d4114498c7d955d961853608a775d02b21f6a6a0a8ad53aa_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a90a673ef30a3adda6b1500edf9c2c6e82a420cc69bcbf70b263d67074b49c6 = $this->env->getExtension("native_profiler");
        $__internal_7a90a673ef30a3adda6b1500edf9c2c6e82a420cc69bcbf70b263d67074b49c6->enter($__internal_7a90a673ef30a3adda6b1500edf9c2c6e82a420cc69bcbf70b263d67074b49c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:secret.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website:</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret", array()), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret", array()), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
        
        $__internal_7a90a673ef30a3adda6b1500edf9c2c6e82a420cc69bcbf70b263d67074b49c6->leave($__internal_7a90a673ef30a3adda6b1500edf9c2c6e82a420cc69bcbf70b263d67074b49c6_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  96 => 30,  84 => 21,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block title %}Symfony - Configure global Secret{% endblock %}*/
/* */
/* {% block content %}*/
/*     {% form_theme form "SensioDistributionBundle::Configurator/form.html.twig" %}*/
/* */
/*     <div class="step">*/
/*         {% include "SensioDistributionBundle::Configurator/steps.html.twig" with { "index": index, "count": count } %}*/
/* */
/*         <h1>Global Secret</h1>*/
/*         <p>Configure the global secret for your website:</p>*/
/* */
/*         <div class="symfony-form-errors">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*         <form action="{{ path('_configurator_step', { 'index': index }) }} " method="POST">*/
/*             <div class="symfony-form-row">*/
/*                 {{ form_label(form.secret) }}*/
/*                 <div class="symfony-form-field">*/
/*                     {{ form_widget(form.secret) }}*/
/*                     <a href="#" onclick="generateSecret(); return false;" class="sf-button">*/
/*                         <span class="border-l">*/
/*                             <span class="border-r">*/
/*                                 <span class="btn-bg">Generate</span>*/
/*                             </span>*/
/*                         </span>*/
/*                     </a>*/
/*                     <div class="symfony-form-errors">*/
/*                         {{ form_errors(form.secret) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*             <div class="symfony-form-footer">*/
/*                 <p>*/
/*                     <button type="submit" class="sf-button">*/
/*                         <span class="border-l">*/
/*                             <span class="border-r">*/
/*                                 <span class="btn-bg">NEXT STEP</span>*/
/*                             </span>*/
/*                         </span>*/
/*                     </button>*/
/*                 </p>*/
/*                 <p>* mandatory fields</p>*/
/*             </div>*/
/* */
/*         </form>*/
/* */
/*         <script type="text/javascript">*/
/*             function generateSecret()*/
/*             {*/
/*                 var result = '';*/
/*                 for (i=0; i < 32; i++) {*/
/*                     result += Math.round(Math.random()*16).toString(16);*/
/*                 }*/
/*                 document.getElementById('distributionbundle_secret_step_secret').value = result;*/
/*             }*/
/*         </script>*/
/*     </div>*/
/* {% endblock %}*/
/* */
