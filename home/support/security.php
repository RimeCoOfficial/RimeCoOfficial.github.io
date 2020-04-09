<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1 class="mdl-typography--font-light">Security</h1>

<p>We know your data is extremely important to you and your business, and we're very protective of it.</p>

<h4>Physical Security</h4>
<ul>
    <li>Data center access limited to data center technicians and approved Rime staff</li>
    <li>Biometric scanning for controlled data center access</li>
    <li>Security camera monitoring at all data center locations</li>
    <li>24x7 onsite staff provides additional protection against unauthorized entry</li>
    <li>Unmarked facilities to help maintain low profile</li>
    <li>Physical security audited by an independent firm</li>
</ul>

<h4>System Security</h4>
<ul>
    <li>System installation using hardened, patched OS</li>
    <li>Dedicated firewall and VPN services to help block unauthorized system access</li>
    <li>Dedicated intrusion detection devices to provide an additional layer of protection against unauthorized system access</li>
    <li>Distributed Denial of Service (DDoS) mitigation services powered by industry-leading solutions</li>
</ul>

<h4>Operational Security</h4>
<ul>
    <li>Data center operations are regularly audited by independent firms against a SOC 1/SSAE 16 (or equivalent) standard</li>
    <li>Systems access logged and tracked for auditing purposes</li>
    <li>Secure document-destruction policies for all sensitive information</li>
    <li>Fully documented change-management procedures</li>
    <li>Independently audited disaster recovery and business continuity plans in place for Rackspace headquarters and support services</li>
</ul>

<h4>Software Security</h4>
<p>We employ a team of 24/7/365 server specialists at Rime to keep our software and its dependencies up to date eliminating potential security vulnerabilities. We employ a wide range of monitoring solutions for preventing and eliminating attacks to the site.</p>

<h4>Communications</h4>
<p>All private data exchanged with Rime is always transmitted over SSL (which is why your dashboard is served over HTTPS, for instance). All pushing and pulling of private data is done over SSH authenticated with keys, or over HTTPS using your Rime username and password.</p>
<p>The SSH login credentials used to push and pull can not be used to access a shell or the filesystem. All users are virtual (meaning they have no user account on our machines) and are access controlled through the peer reviewed.</p>

<h4>File system and backups</h4>
<p>Every piece of hardware we use has an identical copy ready and waiting for an immediate hot-swap in case of hardware or software failure. Every line of code we store is saved on a minimum of three different servers, including an off-site backup just in case a meteor ever hits our data centers (we'll keep our fingers crossed that doesn't happen). We do not retroactively remove data from backups when deleted by the user, as we may need to restore the data for the user if it was removed accidentally.</p>
<p>We do not encrypt data on disk because it would not be any more secure: the website and Rime back-end would need to decrypt the data on demand, slowing down response times.  Any user with shell access to the file system would have access to the decryption routine, thus negating any security it provides. Therefore, we focus on making our machines and network as secure as possible.</p>

<h4>Employee access</h4>
<p>No Rime employees ever access private data unless required to for support reasons.  Staff working directly in the file store access the compressed Rime database, your code is never present as plaintext files like it would be in a local clone.  Support staff may log into your account to access settings related to your support issue.  In rare cases staff may need to pull a clone of your code, this will only be done with your consent.  Support staff does not have direct access to clone any data, they will need to temporarily attach their SSH key to your account to pull a clone.  When working a support issue we do our best to respect your privacy as much as possible, we only access the files and settings needed to resolve your issue.  All cloned data are deleted as soon as the support issue has been resolved.</p>

<h4>Maintaining security</h4>
<p>We protect your login from brute force attacks with rate limiting.  All passwords are filtered from all our logs and are one-way encrypted in the database using <code>bcrypt</code>.  Login information is always sent over SSL.</p>
<p>We have full time security staff to help identify and prevent new attack vectors. We always test new features in order to rule out potential attacks, such as XSS-protecting wikis, and ensuring that Pages cannot access cookies.</p>

<!-- <h4>Credit card safety</h4>
<p>When you sign up for a paid account on Rime, we do not store any of your card information on our servers. It's handed off to <a href="http://braintreepaymentsolutions.com">Braintree Payment Solutions</a>, a company dedicated to storing your sensitive data on <a href="http://en.wikipedia.org/wiki/Payment_Card_Industry_Data_Security_Standard">PCI-Compliant</a> servers.</p> -->

<h4>Contact Us</h4>
<p>Have a question, concern, or comment about Rime security? Please email <?php echo mailto('support@rime.co'); ?>.</p>