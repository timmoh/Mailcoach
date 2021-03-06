<x-help>
    Learn how to configure SES by reading <a target="_blank" href="https://mailcoach.app/docs/v2/app/mail-configuration/amazon-ses">this section of the Mailcoach
        docs</a>.
    <br>
    You must set a webhook to <code
        class="markup-code">{{ url(action(\Spatie\MailcoachSesFeedback\SesWebhookController::class)) }}</code>
</x-help>

<x-text-field
    label="Mails per second"
    name="ses_mails_per_second"
    type="number"
    :value="$mailConfiguration->ses_mails_per_second"
/>

<x-text-field
    label="Key"
    name="ses_key"
    type="password"
    :value="$mailConfiguration->ses_key"
/>

<x-text-field
    label="Secret"
    name="ses_secret"
    type="password"
    :value="$mailConfiguration->ses_secret"
/>

<x-text-field
    label="Region"
    name="ses_region"
    type="text"

    :value="$mailConfiguration->ses_region"
/>

<x-text-field
    label="Configuration set name"
    name="ses_configuration_set"
    type="text"
    :value="$mailConfiguration->ses_configuration_set"
/>
