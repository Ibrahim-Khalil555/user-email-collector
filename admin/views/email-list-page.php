<div class="wrap">
    <h1>Collected Emails</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Email</th>
            <th>Submitted At</th>
        </tr>

        <?php foreach ( $emails as $email ) : ?>
            <tr>
                <td><?php echo esc_html( $email->email ); ?></td>
                <td><?php echo esc_html( $email->created_at ); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
