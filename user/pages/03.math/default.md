---
title: Math
menu: Math
markdown_extra: true
process:
  twig: true
---

# Preliminary Mathematics of Biological Invasions

### Introduction

In this paper we will discuss some of the models from the book "Biological Invasions: Theory and Practice" by Shigesada and Kawasaki (1997), leaving out examples and discussion of data from the field, but including more mathematical detail. The aim is to provide a clear introduction to selected preliminary models of biological invasion for those primarily interested in the mathematical aspects.

Biological invasion consists of two primary change processes, namely the change in spatial occupation of individuals and the change in population size. The models for biological invasion that we will investigate will therefore have the following form:

\[
\begin{equation}
\frac{\partial n}{\partial t}=N_{1}+N_{2}
\end{equation}
\]

where the left hand side is the change in population density with time, \(n(X,t)\) is the population at spatial coordinate \(X\) (which could for example be \(x\) when we consider an invasion along a single line, \((x,y)\) when we consider an invasion across specific coordinates in two-dimensional space or $r$ when we consider an invasion across radial coordinates in two-dimensional space), \(N_{1}\) is the change in population caused by migrating individuals and \(N_{2}\) is the change in population caused by the addition or elimination of individuals. Models where \(N_{1}\neq0\), \(N_{2}=0\) are diffusion equations with or without advection, and models where \(N_{1}\neq0\), \(N_{2}\neq0\) can be classified as reaction-diffusion equations.

In chapter 1 we consider a single species invading without interaction with another species. Although the results of such models may at times closely resemble reality, for example when only very weak competition is encountered, it is very unlikely for a species to invade an area without encountering other species. This is addressed in chapters 2 and 3, where we consider some of the interactions that occur between two species. In chapter 2, we investigate the dynamic when a well established resident species is encountered, whilst in chapter 3 we consider the dynamic when another invading species is encountered.

The models discussed here assume homogenous environments, random-walk migration and an absence of predation. Models of biological invasion considering heterogenous environments, dispersal and predation are natural further topics of study.

### Tabular overview of models

|Equation |Species    |Migration    |Growth    |Competition    |
|---------|:---------:|:-----------:|:--------:|:-------------:|
|Diffusion|1          |x            |          |               |
|Malthusian|1         |             |x         |               |
|Logistic |1          |             |x         |x              |
|Skellam  |1          |x            |x         |               |
|Fisher's |1          |x            |x         |x              |
|Lotka-Volterra|2     |             |x         |x              |
|Fisher's with Lotka-Volterra|2|x   |x          |x             |

## Single species invading with no interaction

During a biological invasion, the invading species encounters and interacts with other species. The invasion is therefore influenced by competition and predation. Nevertheless, it is useful for the sake of simplicity to start by ignoring these interactions. In this chapter we will investigate the case of a single species invading with no interaction. The foundation that we develop in this chapter is relevant when we later consider interaction with other species. Furthermore, sometimes these interactions have very little influence on the invasion, and thus a model for a single species invading with no interaction may then be sufficiently close to reality.

The first model we look at, Fisher's equation, employs the diffusion equation in two dimensions for \(N_{1}\) (change in population caused by migrating individuals) and the logistic equation for \(N_{2}\) (change in population caused by the addition and elimination of individuals):

\[
\begin{equation}
\frac{\partial n}{\partial t}=D\left(\frac{\partial^{2}n}{\partial x^{2}}+\frac{\partial^{2}n}{\partial y^{2}}\right)+(\varepsilon-\mu n)n
\end{equation}
\]

where \(n(\mathbf{x},t)\) is the population density at spatial coordinate \(\mathbf{x}=(x,y)\), \(D>0\) is the diffusion coefficient, which in the case of biological invasion represents the pace of migration of individuals, \(\varepsilon\) is the intrinsic growth rate for the species, i.e. when the population is low and \(\mu\geq0\) is the effect of competition within the species on growth rate.

We will investigate simpler equations related to Fisher's equation (2) before returning to it later.

### Diffusion equation in two dimensions

If the invasion proceeds purely through the migration individuals, i.e. there is no addition or elimination of individuals, \(N_{1}\) is zero and Fisher's equation becomes simply the diffusion equation in two dimensions:

\[
\begin{equation}
\frac{\partial n}{\partial t}=D\left(\frac{\partial^{2}n}{\partial x^{2}}+\frac{\partial^{2}n}{\partial y^{2}}\right)
\end{equation}
\]

The diffusion equation has been well studied in numerous contexts. To solve the diffusion equation in two dimensions (3), an initial condition must first be specified. Assuming that the invasion is started (\(t=0\)) at a single point by \(n_{0}\) individuals, the initial condition can be expressed using the Dirac delta function[^1]:

[^1]: The Dirac delta function \(\delta(\mathbf{x})\) can be defined as a measure with \(\delta(A)=1\) if \(0\in A\) and \(\delta(A)=0\) if \(0\notin A\)

\[
\begin{equation}
n(\mathbf{x},0)=n_{0}\delta(\mathbf{x})
\end{equation}
\]

A solution for the diffusion equation in two dimensions (3) under the above initial condition (4) has been found and is referred to as the two dimensional Gaussian distribution:

\[
\begin{equation}
n(\mathbf{x},t)=\frac{n_{0}}{4\pi Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}
\end{equation}
\]

We can test this solution by substituting (5) in (3):

\[
\begin{equation}
\frac{\partial\frac{n_{0}}{4\pi Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial t}=D\left(\frac{\partial^{2}\frac{n_{0}}{4\pi Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial x^{2}}+\frac{\partial^{2}\frac{n_{0}}{4\pi Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial y^{2}}\right)
\end{equation}
\]

Applying the product rule and simplifying for the left hand side of (6):

\[
\frac{\partial\frac{n_{0}}{4\pi Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial t}=\frac{\partial\frac{n_{0}}{4\pi Dt}}{\partial t}e^{-\frac{x^{2}+y^{2}}{4Dt}}+\frac{\partial e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial t}\frac{n_{0}}{4\pi Dt}
\]

\[
=-\frac{n_{0}}{4\pi Dt^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}+\frac{x^{2}+y^{2}}{4Dt^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\frac{n_{0}}{4\pi Dt}
\]

\[
\begin{equation}
=\frac{n_{0}}{4\pi Dt^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\left(-1+\frac{x^{2}+y^{2}}{4Dt}\right)
\end{equation}
\]

Applying the product rule twice for the second derivative with respect to $x$ in the right hand side of (6):

\[
\frac{\partial^{2}\frac{n_{0}}{4\pi Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial x^{2}}=\frac{\partial}{\partial x}\left(\frac{\partial\frac{n_{0}}{4\pi Dt}}{\partial x}e^{-\frac{x^{2}+y^{2}}{4Dt}}+\frac{\partial e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial x}\frac{n_{0}}{4\pi Dt}\right)
\]

\[
=\frac{\partial}{\partial x}\left(0e^{-\frac{x^{2}+y^{2}}{4Dt}}-\frac{x}{2Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}\frac{n_{0}}{4\pi Dt}\right)
\]

\[
=\frac{\partial}{\partial x}\left(-\frac{xn_{0}}{8\pi D^{2}t^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\right)
\]

\[
=-\frac{\partial\frac{xn_{0}}{8\pi D^{2}t^{2}}}{\partial x}e^{-\frac{x^{2}+y^{2}}{4Dt}}-\frac{xn_{0}}{8\pi D^{2}t^{2}}\frac{\partial e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial x}
\]

\[
=-\frac{n_{0}}{8\pi D^{2}t^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}+\frac{2x^{2}n_{0}}{32\pi D^{3}t^{3}}e^{-\frac{x^{2}+y^{2}}{4Dt}}
\]

\[
\begin{equation}
=\frac{n_{0}}{8\pi D^{2}t^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\left(-1+\frac{x^{2}}{2Dt}\right)
\end{equation}
\]

We can apply the product rule twice for the second derivative with respect to $y$ in the right hand side of (6) in the same way we did above, thus:

\[
\begin{equation}
\frac{\partial^{2}\frac{n_{0}}{4\pi Dt}e^{-\frac{x^{2}+y^{2}}{4Dt}}}{\partial y^{2}}=\frac{n_{0}}{8\pi D^{2}t^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\left(-1+\frac{y^{2}}{2Dt}\right)
\end{equation}
\]

Putting our results (7), (8) and (9) for the parts of (6) together we have:

\[
\frac{n_{0}}{4\pi Dt^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\left(-1+\frac{x^{2}+y^{2}}{4Dt}\right)
\]

\[
=D\left(\frac{n_{0}}{8\pi D^{2}t^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\left(-1+\frac{x^{2}}{2Dt}\right)+\frac{n_{0}}{8\pi D^{2}t^{2}}e^{-\frac{x^{2}+y^{2}}{4Dt}}\left(-1+\frac{y^{2}}{2Dt}\right)\right)
\]

\[
\iff-1+\frac{x^{2}+y^{2}}{4Dt}=D\left(\frac{1}{2D}\left(-1+\frac{x^{2}}{2Dt}\right)+\frac{1}{2D}\left(-1+\frac{y^{2}}{2Dt}\right)\right)
\]

\[
=D\left(\frac{1}{2D}\left(-1+\frac{x^{2}}{2Dt}\right)+\frac{1}{2D}\left(-1+\frac{y^{2}}{2Dt}\right)\right)=-\frac{1}{2}+\frac{x^{2}}{4Dt}-\frac{1}{2}+\frac{y^{2}}{4Dt}
\]

\[
\begin{equation}
\iff\frac{x^{2}+y^{2}}{4Dt}=\frac{x^{2}}{4Dt}+\frac{y^{2}}{4Dt}=\frac{x^{2}+y^{2}}{4Dt}
\end{equation}
\]

We have thus confirmed that (5) is indeed a solution of (3).

When working with biological invasion models, it sometimes makes sense to switch to radial coordinates, as in many cases the invasion would indeed proceed concentrically around the initial point of invasion. If we set $r=\sqrt{x^{2}+y^{2}}$, i.e. the distance from the origin to $\mathbf{x}=(x,y)$, we can rewrite (5) to express the population density at some arbitrary point on a circle with radius $r$ as:

\[
\begin{equation}
n(r,t)=\frac{n_{0}}{4\pi Dt}e^{-\frac{r^{2}}{4Dt}}
\end{equation}
\]

This solution (11) is a Gaussian distribution. For any \(n_{0}>0\) invading individuals, the population \(n(r,t)\) will be larger than zero for any values of \(r\) and \(t>0\). In practice, we would not consider the population of a discreet number of individuals to extend over an infinite range. Furthermore, our ability to detect population density is not perfect. To resolve these issues, we introduce a threshold density \(n*\) that represents the minimum population density that we are able to detect, and refer to the set of coordinates \(r\mid n<n*\) as the range of the population. Successive curves plotted of solution (11) for increasing values of $t$ show how the population spreads over time due to migration only (Figure 1). As there is no addition of individuals to the population, the population at any given point continues to decrease and eventually the population density becomes lower than the threshold density \(n*.\) The range of the population thus decreases and then disappears.

{% include 'partials/figure.html.twig' with {'number': 1, 'image': 'Diffusion equation population density r export.png', 'caption': 'Diffusion equation population density at time intervals: Plots for solution (11) of the diffusion equation with \(t=0.1k\) for \(k=1,2,...,10\) and \(n_{0}=50\), \(D=5\). For a threshold density representing the minimum population density that we can detect (the blue line $n*=1$ in our example), we do not consider \(r\mid n<n*\) as part of the range of the population. Thus the range decreases and then disappears after a certain period of migration without addition of individuals.'} %}


To be able to make use of the diffusion equation for studying biological invasions, we need to make observations of migrating individuals in order to determine a diffusion coefficient \(D\) for the species or specific population. Such observations will provide us with data for $r$ and $t$, so we need to express \(D\) as a function of \(r\) and $t$ so that we are able to calculate \(D\). From the Gaussian distribution (11) we can calculate the mean radius and the mean square radius and isolate D for each:

\[
\left\langle r\right\rangle =\frac{1}{n_{0}}\int_{0}^{\infty}rn(r,t)2\pi rdr=\sqrt{\pi Dt}
\]

\[
\begin{equation}
\iff D=\frac{\left\langle r\right\rangle ^{2}}{\pi t}
\end{equation}
\]

\[
\left\langle r^{2}\right\rangle =\frac{1}{n_{0}}\int_{0}^{\infty}r^{2}n(r,t)2\pi rdr=4Dt
\]

\[
\begin{equation}
\iff D=\frac{\left\langle r^{2}\right\rangle }{4t}
\end{equation}
\]

Whether we use the mean radius \(\left\langle r\right\rangle\) (12) or the mean square radius \(\left\langle r^{2}\right\rangle\) (13) will depend on the observations we can make or the data we have available. If we are able to use multiple measurements of spatial distribution over time, we can use \(\left\langle r^{2}\right\rangle\); \(D\) will be equal to \(\frac{1}{4}\) of slope of the linear regression line of the multiple coordinates \((\left\langle r^{2}\right\rangle ,t).\) If we are not able to access this data, we can instead observe the migration of individuals and take measurements of their respective distances from the starting point (origin) after a period of time; D will then be equal to the square of the average distance from the origin divided by \(\pi t\).

### Logistic equation
