<?php

/* AcmeShopBundle:Shop:index.html.twig */
class __TwigTemplate_d336d690c7d8494501932ab1b25633b9f89526aa0cc44eb1c25ebd2c03704e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AcmeShopBundle:Shop:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'leftBlock' => array($this, 'block_leftBlock'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeShopBundle:Shop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "hi people";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeshop/css/main.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->env->loadTemplate("AcmeShopBundle:Shop:header.html.twig")->display($context);
    }

    // line 10
    public function block_leftBlock($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->env->loadTemplate("AcmeShopBundle:Shop:leftBlock.html.twig")->display($context);
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeShopBundle:Shop:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  72 => 14,  67 => 11,  64 => 10,  59 => 7,  56 => 6,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
