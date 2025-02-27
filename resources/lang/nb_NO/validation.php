<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'missing_where'                  => 'Array is missing "where"-clause',
    'missing_update'                 => 'Array is missing "update"-clause',
    'invalid_where_key'              => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'             => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'             => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'     => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'         => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                           => 'Dette er ikke en gyldig IBAN.',
    'zero_or_more'                   => 'Verdien kan ikke være negativ.',
    'date_or_time'                   => 'Verdien må være et gyldig dato- eller klokkeslettformat (ISO 8601).',
    'source_equals_destination'      => 'Kildekontoen er lik destinasjonskonto.',
    'unique_account_number_for_user' => 'Det ser ut som dette kontonummeret er allerede i bruk.',
    'unique_iban_for_user'           => 'Det ser ut som dette IBAN er allerede i bruk.',
    'deleted_user'                   => 'På grunn av sikkerhetsbegrensninger kan du ikke registreres med denne e-postadresse.',
    'rule_trigger_value'             => 'Denne verdien er ugyldig for den valgte triggeren.',
    'rule_action_value'              => 'Denne verdien er ugyldig for den valgte handlingen.',
    'file_already_attached'          => 'Opplastede fil ":name" er allerede knyttet til dette objektet.',
    'file_attached'                  => 'Opplasting av fil ":name" var vellykket.',
    'must_exist'                     => 'IDen i feltet :attribute finnes ikke i databasen.',
    'all_accounts_equal'             => 'Alle kontoer i dette feltet må være like.',
    'group_title_mandatory'          => 'En gruppetittel er obligatorisk når det er mer enn én transaksjon.',
    'transaction_types_equal'        => 'Alle deler må være av samme type.',
    'invalid_transaction_type'       => 'Ugyldig transaksjonstype.',
    'invalid_selection'              => 'Dine valg er ugyldig.',
    'belongs_user'                   => 'Denne verdien er ugyldig for dette feltet.',
    'at_least_one_transaction'       => 'Trenger minst én transaksjon.',
    'at_least_one_repetition'        => 'Trenger minst en gjentagelse.',
    'require_repeat_until'           => 'Krever enten et antall repetisjoner eller en slutt dato (gjentas til). Ikke begge.',
    'require_currency_info'          => 'Innholdet i dette feltet er ugyldig uten valutainformasjon.',
    'not_transfer_account'           => 'This account is not an account that can be used for transfers.',
    'require_currency_amount'        => 'The content of this field is invalid without foreign amount information.',
    'equal_description'              => 'Transaksjonsbeskrivelsen bør ikke være lik global beskrivelse.',
    'file_invalid_mime'              => 'Kan ikke akseptere fil ":name" av typen ":mime" for opplasting.',
    'file_too_large'                 => '":name"-filen er for stor.',
    'belongs_to_user'                => 'Verdien av :attribute er ukjent.',
    'accepted'                       => ':attribute må bli godtatt.',
    'bic'                            => 'Dette er ikke en gyldig BIC.',
    'at_least_one_trigger'           => 'Regel må ha minst en trigger.',
    'at_least_one_action'            => 'Regel må ha minst en aksjon.',
    'base64'                         => 'Dette er ikke godkjent base64 kodet data.',
    'model_id_invalid'               => 'Den angitte ID er ugyldig for denne modellen.',
    'less'                           => ':attribute må være mindre enn 10,000,000',
    'active_url'                     => ':attribute er ikke en gyldig URL.',
    'after'                          => ':attribute må være en dato etter :date.',
    'date_after'                     => 'The start date must be before the end date.',
    'alpha'                          => ':attribute kan kun inneholde bokstaver.',
    'alpha_dash'                     => ':attribute kan bare inneholde bokstaver, tall og bindestreker.',
    'alpha_num'                      => ':attribute kan bare inneholde bokstaver og tall.',
    'array'                          => ':attribute må være en liste.',
    'unique_for_user'                => 'Det finnes allerede en forekomst med :attribute.',
    'before'                         => ':attribute må være en dato før :date.',
    'unique_object_for_user'         => 'Dette navnet er allerede i bruk.',
    'unique_account_for_user'        => 'Dette konto navnet er allerede i bruk.',
    'between.numeric'                => ':attribute må være en verdi mellom :min og :max.',
    'between.file'                   => ':attribute må være mellom :min og :max kilobyte.',
    'between.string'                 => ':attribute må være mellom :min og :max tegn.',
    'between.array'                  => ':attribute må ha mellom :min og :max elementer.',
    'boolean'                        => ':attribute må være sann eller usann.',
    'confirmed'                      => ':attribute bekreftelsen stemmer ikke overens.',
    'date'                           => ':attribute er ikke en gyldig dato.',
    'date_format'                    => ':attribute samsvarer ikke med formatet :format.',
    'different'                      => ':attribute og :other må være forskjellig.',
    'digits'                         => ':attribute må være :digits sifre.',
    'digits_between'                 => ':attribute må være mellom :min og :max sifre.',
    'email'                          => ':attribute må være en gyldig epostaddresse.',
    'filled'                         => ':attribute må fylles ut.',
    'exists'                         => 'Den valgte :attribute er ikke gyldig.',
    'image'                          => ':attribute må være et bilde.',
    'in'                             => 'Den valgte :attribute er ikke gyldig.',
    'integer'                        => ':attribute må være et heltall.',
    'ip'                             => ':attribute må være en gyldig IP-addresse.',
    'json'                           => ':attribute må være en gyldig JSON streng.',
    'max.numeric'                    => ':attribute ikke kan være større enn :max.',
    'max.file'                       => ':attribute ikke kan være større enn :max kilobytes.',
    'max.string'                     => ':attribute ikke kan være større enn :max tegn.',
    'max.array'                      => ':attribute kan ikke inneholde mer enn :max elementer.',
    'mimes'                          => ':attribute må være en fil av type: :values.',
    'min.numeric'                    => ':attribute må være minst :min.',
    'lte.numeric'                    => ':attribute må være mindre enn eller lik :value.',
    'min.file'                       => ':attribute må være minst :min kilobytes.',
    'min.string'                     => ':attribute må være minst :min tegn.',
    'min.array'                      => ':attribute må inneholde minst :min elementer.',
    'not_in'                         => 'Den valgte :attribute er ikke gyldig.',
    'numeric'                        => ':attribute må være et tall.',
    'numeric_native'                 => 'Den normale beløpet må være et nummer.',
    'numeric_destination'            => 'Destinasjons beløpet må være et nummer.',
    'numeric_source'                 => 'Kilde beløpet må være et nummer.',
    'regex'                          => ':attribute formatet er ugyldig.',
    'required'                       => ':attribute feltet må fylles ut.',
    'required_if'                    => ':attribute feltet er påkrevd når :other er :value.',
    'required_unless'                => ':attribute feltet er påkrevd hvis ikke :other er i :values.',
    'required_with'                  => ':attribute feltet er nødvendig når :values er tilstede.',
    'required_with_all'              => ':attribute feltet er nødvendig når :values er tilstede.',
    'required_without'               => ':attribute er påkrevd når :values ikke er definert.',
    'required_without_all'           => ':attribute er påkrevd når ingen av :values er definert.',
    'same'                           => ':attribute og :other må være like.',
    'size.numeric'                   => ':attribute må være :size.',
    'amount_min_over_max'            => 'Minimumsbeløpet kan ikke være større enn maksimumsbeløpet.',
    'size.file'                      => ':attribute må være :size kilobyte.',
    'size.string'                    => ':attribute må være :size tegn.',
    'size.array'                     => ':attribute må inneholde :size elementer.',
    'unique'                         => ':attribute har allerede blitt tatt.',
    'string'                         => ':attribute må være en streng.',
    'url'                            => ':attribute formatet er ugyldig.',
    'timezone'                       => ':attribute må være en gyldig tidssone.',
    '2fa_code'                       => ':attribute formatet er ugyldig.',
    'dimensions'                     => ':attribute har ugyldig bilde dimensjoner.',
    'distinct'                       => ':attribute feltet har en duplikatverdi.',
    'file'                           => ':attribute må være en fil.',
    'in_array'                       => 'Feltet :attribute finnes ikke i :other.',
    'present'                        => ':attribute feltet må være definert.',
    'amount_zero'                    => 'Totalbeløpet kan ikke være null.',
    'current_target_amount'          => 'The current amount must be less than the target amount.',
    'unique_piggy_bank_for_user'     => 'Navnet på sparegris må være unik.',
    'unique_object_group'            => 'The group name must be unique',
    'starts_with'                    => 'The value must start with :values.',
    'unique_webhook'                 => 'You already have a webhook with these values.',
    'unique_existing_webhook'        => 'You already have another webhook with these values.',
    'same_account_type'              => 'Both accounts must be of the same account type',
    'same_account_currency'          => 'Both accounts must have the same currency setting',

    'secure_password'             => 'Dette er ikke et sikkert passord. Vennligst prøv igjen. For mer informasjon, se https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Ugyldig repetisjons type for gjentakende transaksjoner.',
    'valid_recurrence_rep_moment' => 'Ugyldig repetisjons tid for denne type repetisjon.',
    'invalid_account_info'        => 'Ugyldig konto informasjon.',
    'attributes'                  => [
        'email'                   => 'epostadresse',
        'description'             => 'beskrivelse',
        'amount'                  => 'beløp',
        'transactions.*.amount'   => 'transaction amount',
        'name'                    => 'navn',
        'piggy_bank_id'           => 'sparegris ID',
        'targetamount'            => 'målbeløp',
        'opening_balance_date'    => 'opening balance date',
        'opening_balance'         => 'opening balance',
        'match'                   => 'match',
        'amount_min'              => 'minimumsbeløp',
        'amount_max'              => 'maksimumsbeløp',
        'title'                   => 'tittel',
        'tag'                     => 'tag',
        'transaction_description' => 'transaksjonsbeskrivelse',
        'rule-action-value.1'     => 'regel aksjonsverdi #1',
        'rule-action-value.2'     => 'regel aksjonsverdi #2',
        'rule-action-value.3'     => 'regel aksjonsverdi #3',
        'rule-action-value.4'     => 'regel aksjonsverdi #4',
        'rule-action-value.5'     => 'regel aksjonsverdi #5',
        'rule-action.1'           => 'regel aksjon#1',
        'rule-action.2'           => 'regel aksjon#2',
        'rule-action.3'           => 'regel aksjon#3',
        'rule-action.4'           => 'regel aksjon#4',
        'rule-action.5'           => 'regel aksjon#5',
        'rule-trigger-value.1'    => 'regel trigger verdi #1',
        'rule-trigger-value.2'    => 'regel trigger verdi #2',
        'rule-trigger-value.3'    => 'regel trigger verdi #3',
        'rule-trigger-value.4'    => 'regel trigger verdi #4',
        'rule-trigger-value.5'    => 'regel trigger verdi #5',
        'rule-trigger.1'          => 'regel trigger #1',
        'rule-trigger.2'          => 'regel trigger #2',
        'rule-trigger.3'          => 'regel trigger #3',
        'rule-trigger.4'          => 'regel trigger #4',
        'rule-trigger.5'          => 'regel trigger #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Trenger en gyldig kilde konto-ID og/eller gyldig kilde kontonavn for å fortsette.',
    'withdrawal_source_bad_data'  => 'Finner ikke en gyldig kilde-konto ved å søke etter ID ":id" eller navn ":name".',
    'withdrawal_dest_need_data'   => 'Trenger en gyldig destinasjons konto-ID og/eller gyldig destinasjons kontonavn for å fortsette.',
    'withdrawal_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => 'Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Trenger en gyldig kilde konto-ID og/eller gyldig kilde kontonavn for å fortsette.',
    'deposit_source_bad_data'  => 'Kunne ikke finne en gyldig kilde-konto ved å søke etter ID ":id" eller navn ":name".',
    'deposit_dest_need_data'   => 'Trenger en gyldig destinasjons konto-ID og/eller gyldig destinasjons kontonavn for å fortsette.',
    'deposit_dest_bad_data'    => 'Kunne ikke finne en gyldig destinasjons konto ved å søke etter ID ":id" eller navn ":name".',
    'deposit_dest_wrong_type'  => 'The submitted destination account is not of the right type.',

    'transfer_source_need_data' => 'Trenger en gyldig kilde konto-ID og/eller gyldig kilde kontonavn for å fortsette.',
    'transfer_source_bad_data'  => 'Finner ikke en gyldig kilde-konto ved å søke etter ID ":id" eller navn ":name".',
    'transfer_dest_need_data'   => 'Trenger en gyldig destinasjons konto-ID og/eller gyldig destinasjons kontonavn for å fortsette.',
    'transfer_dest_bad_data'    => 'Kunne ikke finne en gyldig destinasjons konto ved å søke etter ID ":id" eller navn ":name".',
    'need_id_in_edit'           => 'Each split must have transaction_journal_id (either valid ID or 0).',

    'ob_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'lc_source_need_data' => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'   => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',

    'generic_invalid_source'      => 'You can\'t use this account as the source account.',
    'generic_invalid_destination' => 'You can\'t use this account as the destination account.',

    'generic_no_source'      => 'You must submit source account information.',
    'generic_no_destination' => 'You must submit destination account information.',

    'gte.numeric' => 'The :attribute must be greater than or equal to :value.',
    'gt.numeric'  => 'The :attribute must be greater than :value.',
    'gte.file'    => 'The :attribute must be greater than or equal to :value kilobytes.',
    'gte.string'  => 'The :attribute must be greater than or equal to :value characters.',
    'gte.array'   => 'The :attribute must have :value items or more.',

    'amount_required_for_auto_budget' => 'The amount is required.',
    'auto_budget_amount_positive'     => 'The amount must be more than zero.',
    'auto_budget_period_mandatory'    => 'The auto budget period is a mandatory field.',
];
